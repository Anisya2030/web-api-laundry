<p align="center">
    <h1 align="center">Sistem Informasi Laundry Berbasis Laravel</h1>
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-13-red" alt="Laravel">
    <img src="https://img.shields.io/badge/PHP-8-blue" alt="PHP">
    <img src="https://img.shields.io/badge/MySQL-Database-orange" alt="MySQL">
    <img src="https://img.shields.io/badge/Bootstrap-5-purple" alt="Bootstrap">
    <img src="https://img.shields.io/badge/REST-API-green" alt="REST API">
</p>

## Tentang Project

Sistem Informasi Laundry merupakan aplikasi berbasis web yang dikembangkan menggunakan framework Laravel. Aplikasi ini dirancang untuk membantu pengelolaan usaha laundry mulai dari pengelolaan pelanggan, layanan, transaksi, hingga penyusunan laporan pendapatan.

Selain aplikasi berbasis web, sistem ini juga menyediakan REST API untuk mendukung pertukaran data dengan aplikasi lain.

---

## Fitur Sistem

### Dashboard
- Menampilkan total pelanggan.
- Menampilkan total layanan.
- Menampilkan jumlah transaksi hari ini.
- Menampilkan pendapatan hari ini.

### Manajemen Pelanggan
- Menambah data pelanggan.
- Menampilkan data pelanggan.
- Mengubah data pelanggan.
- Menghapus data pelanggan.
- Menampilkan detail pelanggan.

### Manajemen Layanan
- Menambah data layanan.
- Menampilkan data layanan.
- Mengubah data layanan.
- Menghapus data layanan.
- Menampilkan detail layanan.

### Manajemen Transaksi
- Menambah transaksi laundry.
- Menghitung total harga secara otomatis.
- Mengubah data transaksi.
- Menghapus data transaksi.
- Menampilkan detail transaksi.

### Laporan
- Pendapatan hari ini.
- Pendapatan minggu ini.
- Pendapatan bulan ini.
- Export laporan ke Microsoft Excel.

### REST API
API mendukung operasi:

- GET
- POST
- PUT
- DELETE

---

## Teknologi yang Digunakan

| Teknologi | Keterangan |
|-----------|------------|
| Laravel 13 | Framework Backend |
| PHP 8 | Bahasa Pemrograman |
| MySQL | Database |
| Bootstrap 5 | User Interface |
| Postman | Pengujian API |
| Laravel Excel | Export Laporan |

---

## Endpoint REST API

### API Pelanggan

| Method | Endpoint |
|---------|----------|
| GET | /api/pelanggan |
| POST | /api/pelanggan |
| GET | /api/pelanggan/{id} |
| PUT | /api/pelanggan/{id} |
| DELETE | /api/pelanggan/{id} |

### API Layanan

| Method | Endpoint |
|---------|----------|
| GET | /api/layanan |
| POST | /api/layanan |
| GET | /api/layanan/{id} |
| PUT | /api/layanan/{id} |
| DELETE | /api/layanan/{id} |

### API Transaksi

| Method | Endpoint |
|---------|----------|
| GET | /api/transaksi |
| POST | /api/transaksi |
| GET | /api/transaksi/{id} |
| PUT | /api/transaksi/{id} |
| DELETE | /api/transaksi/{id} |

---

## Cara Menjalankan Project

### Clone Repository

```bash
git clone https://github.com/Anisya2030/web-api-laundry.git
```

### Masuk ke Folder Project

```bash
cd web-api-laundry
```

### Install Dependency

```bash
composer install
```

### Salin File Environment

```bash
cp .env.example .env
```

### Generate Key

```bash
php artisan key:generate
```

### Konfigurasi Database

Sesuaikan file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laundry_db
DB_USERNAME=root
DB_PASSWORD=
```

### Migrasi Database

```bash
php artisan migrate
```

### Menjalankan Aplikasi

```bash
php artisan serve
```

Aplikasi dapat diakses melalui:

```bash
http://127.0.0.1:8000
```

---

## Pengembang

**Anisya**  
NIM : 240111018  
Program Studi Informatika  
Universitas Harapan Bangsa

---

## Lisensi

Project ini dibuat untuk keperluan pembelajaran dan tugas akademik.
