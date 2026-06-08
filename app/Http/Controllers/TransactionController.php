<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    // 1. Lihat semua transaksi beserta item yang dibeli
    public function index()
    {
        $transactions = Transaction::with('items.product')->get();
        return response()->json(['data' => $transactions]);
    }

    // 2. Proses Checkout (Beli Barang)
    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1'
        ]);

        DB::beginTransaction();
        try {
            $totalAmount = 0;
            $transactionItems = [];

            foreach ($request->items as $item) {
                $product = Product::find($item['product_id']);
                
                if ($product->stock < $item['quantity']) {
                    return response()->json(['message' => 'Stok ' . $product->name . ' tidak mencukupi'], 400);
                }

                $totalAmount += $product->price * $item['quantity'];
                
                $transactionItems[] = [
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                ];
            }

            $transaction = Transaction::create([
                'user_id' => Auth::id(),
                'invoice_number' => 'INV-' . time(),
                'total_amount' => $totalAmount,
                'status' => 'success'
            ]);

            foreach ($transactionItems as $item) {
                $transaction->items()->create($item);
                
                Product::find($item['product_id'])->decrement('stock', $item['quantity']);
            }

            DB::commit();

            return response()->json([
                'message' => 'Transaksi berhasil, stok telah dikurangi',
                'data' => $transaction->load('items') 
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Terjadi kesalahan sistem', 'error' => $e->getMessage()], 500);
        }
    }

    // 3. Lihat detail 1 transaksi spesifik
    public function show(Transaction $transaction)
    {
        return response()->json(['data' => $transaction->load('items.product')]);
    }
}