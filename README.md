# ☕ Breakpoint Coffee — Point of Sales (POS) & Inventaris

[![Laravel](https://img.shields.io/badge/Backend-Laravel-red.svg)](https://laravel.com)
[![JavaScript](https://img.shields.io/badge/Frontend-Vanilla%20JS-yellow.svg)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![Bootstrap](https://img.shields.io/badge/UI%20Framework-Bootstrap%205-purple.svg)](https://getbootstrap.com)

Aplikasi manajemen kasir modern dan pengelolaan stok (inventaris) berbasis web yang dirancang khusus untuk memenuhi kebutuhan operasional kedai kopi. Sistem ini mengintegrasikan **RESTful API** yang dibangun dengan Laravel sebagai backend dan antarmuka **Glassmorphism Premium** menggunakan Vanilla JavaScript di sisi frontend.

---

## 👨‍💻 Identitas Mahasiswa

| Informasi Akademik | Detail |
| :--- | :--- |
| **Nama Lengkap** | Delta Putra Bagaskara |
| **NIM** | 2305101001 |
| **Program Studi** | Teknik Informatika |
| **Fakultas** | Fakultas Teknik |
| **Instansi** | Universitas PGRI Madiun |
| **Dosen Pembimbing** | Moch Yusuf Asyhari, S.Tr.Kom., M.Kom. |

---

## 📝 Deskripsi Studi Kasus

Proyek ini dibuat untuk mengatasi kendala operasional pencatatan pada Breakpoint Coffee yang sebelumnya masih berjalan secara konvensional, seperti:
* **Risiko Human Error:** Kesalahan kalkulasi nota manual yang berdampak pada selisih keuangan kasir.
* **Sinkronisasi Stok Lemah:** Stok bahan baku/menu tidak terpotong secara otomatis saat ada transaksi penjualan.
* **Rekapitulasi Manual:** Pembuatan laporan pendapatan bulanan membutuhkan waktu lama karena harus menyalin tumpukan nota fisik.

> **Solusi:** Sistem POS ini mengotomatisasi seluruh alur kerja mulai dari transaksi kasir (*real-time stock deduction*), manajemen menu berbasis CRUD, hingga pembuatan visualisasi laporan pendapatan instan.

---

## ✨ Fitur Unggulan

### 1. 💵 Sistem Kasir Modern (Dashboard)
* Desain antarmuka responsif *Glassmorphism* (efek kaca transparan) ala iPad POS Premium.
* Filter kategori menu dinamis (**Semua**, **Kopi**, **Non-Kopi**, **Snacks/Pastry**).
* Manajemen keranjang belanja dengan kontrol kuantitas inkremental (`+` / `-`).
* Kalkulasi otomatis Subtotal, Pajak (10%), dan Grand Total.
* Integrasi pencetakan struk belanja fisik/digital via jendela print otomatis browser.

### 2. ☕ Kelola Menu & Inventaris (Admin)
* Manajemen data produk kopi dan makanan berbasis CRUD (*Create, Read, Update, Delete*).
* Sinkronisasi data otomatis dengan database MySQL melalui API.
* Pengelompokan kategori produk untuk mempermudah inventarisasi stok gudang.

### 3. 📊 Dashboard Laporan Penjualan
* Kartu ringkasan finansial: **Total Pendapatan** dan **Total Transaksi** yang terhitung secara dinamis.
* Tabel riwayat penjualan terperinci lengkap dengan nomor invoice unik dan penanda waktu (*timestamp*).
* Sistem pengaman data dari nilai kosong (*Anti-NaN parsing handling*).
* Fitur ekspor laporan langsung ke format dokumen fisik/PDF dengan tata letak cetak yang bersih.

---

## 🔌 Dokumentasi Endpoint API (Postman)

Sistem ini berkomunikasi menggunakan arsitektur RESTful API melalui endpoint-endpoint berikut:

| No | Method | Endpoint | Fungsi | Status |
| :-: | :-: | :--- | :--- | :-: |
| 1 | `POST` | `/api/login` | Otentikasi hak akses akun kasir | `200 OK` |
| 2 | `POST` | `/api/logout` | Revoke token otentikasi user | `200 OK` |
| 3 | `GET` | `/api/user` | Mengambil profil user yang sedang aktif | `200 OK` |
| 4 | `GET` | `/api/products` | Menampilkan seluruh katalog menu | `200 OK` |
| 5 | `POST` | `/api/products` | Menambah item menu baru ke database | `201 Created` |
| 6 | `GET` | `/api/products/{id}` | Menampilkan detail spesifik satu produk | `200 OK` |
| 7 | `PUT` | `/api/products/{id}` | Memperbarui data produk, harga, dan stok | `200 OK` |
| 8 | `DELETE`| `/api/products/{id}` | Menghapus item menu secara permanen | `200 OK` |
| 9 | `POST` | `/api/transactions`| Memproses transaksi & memotong stok | `201 Created` |
| 10 | `GET` | `/api/transactions`| Menarik data riwayat laporan penjualan | `200 OK` |

---

## 📸 Antarmuka Aplikasi

*Berikut adalah tampilan visual operasional sistem:*

### Halaman Kasir (Sistem POS)
![Kasir](link_gambar_kasir.jpg)

### Halaman Kelola Menu (CRUD Produk)
![Kelola Menu](link_gambar_menu.jpg)

### Halaman Laporan Penjualan (Cetak PDF)
![Laporan](link_gambar_laporan.jpg)

---

## 🚀 Panduan Instalasi Sistem

Ikuti instruksi di bawah ini untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Persyaratan Sistem
* PHP >= 8.1
* Composer
* MySQL (XAMPP Control Panel)

### 2. Langkah Penginstalan
1. **Clone Repository:**
   ```bash
   git clone [https://github.com/username-anda/repository-anda.git](https://github.com/username-anda/repository-anda.git)
   cd repository-anda



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
