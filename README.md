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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# ⚓ SakuPulau - Platform Informasi Penyeberangan Kepulauan Riau

**SakuPulau** adalah platform digital berbasis web (*Minimum Viable Product*) yang dirancang khusus untuk mengatasi masalah asimetri informasi mobilitas laut di wilayah Kepulauan Riau (Kepri). Menggunakan framework **Laravel** dan **Tailwind CSS**, platform ini berfokus pada kemudahan akses informasi jadwal penyeberangan kapal, pompong, maupun roro antarpulau yang ramah pengguna (*mobile-first design*).

---

## 🛠️ Tech Stack & Prasyarat Sistem

Sebelum menjalankan aplikasi, pastikan komputer Anda sudah terpasang:

* **PHP** (Minimal versi 8.2)
* **Composer** (Dependency manager PHP)
* **MySQL / MariaDB** (Melalui XAMPP)
* **Node.js & NPM** (Untuk kompilasi aset CSS Tailwind)

---

## 🚀 Cara Menjalankan Projek di Lokal (Instalasi Cepat)

Jika Anda memindahkan projek ini atau membukanya di perangkat baru, ikuti langkah berikut:

1. **Persiapan Database:**
* Buka XAMPP dan aktifkan `Apache` serta `MySQL`.
* Masuk ke `http://localhost/phpmyadmin` dan buat database baru bernama `sakupulau`.


2. **Setup Dependencies PHP & Environment:**
```bash
composer install
cp .env.example .env
php artisan key:generate

```


*Buka file `.env` dan pastikan nama database sesuai (`DB_DATABASE=sakupulau`).*
3. **Migrasi & Pengisian Data Awal (Seeder):**
```bash
php artisan migrate:fresh --seed

```


*Perintah ini otomatis membuat akun admin bawaan beserta 5 jadwal kapal simulasi di Kepri.*
4. **Kompilasi Aset CSS (Tailwind):**
```bash
npm install
npm run dev

```


5. **Jalankan Server Lokal:**
```bash
php artisan serve

```


*Buka browser dan akses URL:* `http://127.0.0.1:8000`

---

## 📖 Tata Cara Penggunaan Aplikasi

### 1. Halaman Login & Registrasi

* **Membuat Akun Baru (Registrasi):**
* Klik tautan **"Daftar di sini"** yang terletak di bawah tombol login.
* Isi nama lengkap, alamat email aktif, dan kata sandi Anda.
* Klik **Register**. Sistem akan otomatis membuat akun dan mengarahkan Anda ke Dashboard.


* **Masuk Aplikasi (Login):**
* Masukkan email dan password yang sudah didaftarkan.
* *Akun Uji Coba Bawaan:* Email: `admin@sakupulau.com` | Password: `password123`.



### 2. Alur Kerja & Fungsi Setiap Halaman (Webpage)

#### A. Halaman Dashboard (`/dashboard`)

Ini adalah halaman utama (*hub*) setelah pengguna berhasil masuk.

* **Fungsi:** Menampilkan *banner* selamat datang yang dinamis dan kartu grid layanan.
* **Fitur:** Terdapat akses cepat ke menu "Papan Jadwal Kapal". Menu lain seperti "Pasar Pulau" dan "Kondisi Laut" saat ini dipasang sebagai indikator pengembangan fitur startup tahap selanjutnya (*Coming Soon*).

#### B. Papan Jadwal Kapal Kepri (`/schedules`)

Halaman inti yang menjawab kebutuhan utama masyarakat Kepri untuk memantau jadwal penyeberangan.

* **Fungsi:** Menampilkan papan informasi digital jadwal keberangkatan kapal, jenis akomodasi (Speedboat, Roro, Pompong, Pelni), harga tiket, hingga status operasional.
* **Cara Menggunakan Fitur Pencarian:**
1. Pilih pulau keberangkatan Anda pada kolom **"Dari Pulau"** (Contoh: Batam).
2. Pilih pulau tujuan Anda pada kolom **"Ke Pulau"** (Contoh: Lingga).
3. Klik tombol **Saring Jadwal**.
4. Sistem akan menyaring database secara *real-time* dan hanya menampilkan jadwal yang cocok. Jika tidak ada jadwal, sistem akan memunculkan notifikasi pencarian tidak ditemukan dengan ramah.



#### C. Pengaturan & Edit Profil (`/profile`)

Halaman khusus bagi pengguna untuk mengelola kredensial akun mereka demi menjaga keamanan data pribadi.

* **Cara Mengakses:** Klik nama akun Anda di pojok kanan atas layar (pada bilah navigasi), lalu pilih menu **Profile**.
* **Fitur di Dalam Edit Profil:**
* **Profile Information:** Mengubah nama tampilan atau alamat email pengguna.
* **Update Password:** Mengubah kata sandi lama ke kata sandi baru untuk meningkatkan keamanan akun.
* **Delete Account:** Fitur pembersihan data medis/privasi yang memungkinkan pengguna menghapus akun mereka secara permanen dari sistem SakuPulau jika sudah tidak digunakan lagi.



---

## 🔒 Hak Akses & Keamanan

Aplikasi ini dilengkapi dengan middleware `auth`. Pengguna awam yang belum melakukan login **tidak akan bisa mengintip** halaman Dashboard maupun Papan Jadwal Kapal melalui URL langsung, sistem akan otomatis melempar balik (*redirect*) pengguna ke halaman login demi keamanan data.

---

*Proyek SakuPulau ini dikembangkan sebagai bentuk solusi teknologi simpel, aplikatif, dan berdampak langsung untuk masyarakat di wilayah maritim.*
