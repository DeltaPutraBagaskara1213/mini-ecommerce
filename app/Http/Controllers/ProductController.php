<?php
namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;

    class ProductController extends Controller
    {
        // 1. GET: Tampilkan semua produk
        public function index()
        {
            $products = Product::all();
            return response()->json([
                'message' => 'Berhasil mengambil data produk',
                'data' => $products
            ], 200);
        }

        // 2. POST: Tambah produk baru
        public function store(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0'
            ]);

            $product = Product::create($validated);

            return response()->json([
                'message' => 'Produk berhasil ditambahkan',
                'data' => $product
            ], 201);
        }

        // 3. GET: Tampilkan 1 produk spesifik berdasarkan ID
        public function show(Product $product)
        {
            return response()->json([
                'message' => 'Detail produk',
                'data' => $product
            ], 200);
        }

        // 4. PUT/PATCH: Update data produk
        public function update(Request $request, Product $product)
        {
            $validated = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'sometimes|required|numeric|min:0',
                'stock' => 'sometimes|required|integer|min:0'
            ]);

            $product->update($validated);

            return response()->json([
                'message' => 'Produk berhasil diupdate',
                'data' => $product
            ], 200);
        }

        // 5. DELETE: Hapus produk
        public function destroy(Product $product)
        {
            $product->delete();

            return response()->json([
                'message' => 'Produk berhasil dihapus'
            ], 200);
        }
    }
