# Sistem Informasi Laundry Berbasis Laravel

## Deskripsi

Sistem Informasi Laundry merupakan aplikasi berbasis web yang dikembangkan menggunakan framework Laravel. Sistem ini bertujuan untuk membantu pengelolaan usaha laundry mulai dari pencatatan pelanggan, layanan, transaksi, hingga penyusunan laporan pendapatan.

Selain aplikasi berbasis web, sistem ini juga menyediakan REST API untuk mendukung pertukaran data dengan aplikasi lain.

---

## Tahapan Pengembangan Project

Tahapan pengembangan sistem dilakukan sebagai berikut:

1. Analisis kebutuhan sistem.
2. Perancangan database.
3. Pembuatan migration database.
4. Pembuatan model.
5. Pembuatan REST API.
6. Pengujian API menggunakan Postman.
7. Pembuatan antarmuka web menggunakan Blade dan Bootstrap.
8. Implementasi fitur CRUD.
9. Implementasi dashboard statistik.
10. Implementasi laporan dan export Excel.
11. Pengujian keseluruhan sistem.

---

## Fitur Sistem

### Dashboard
Dashboard menampilkan informasi statistik yang terdiri dari:

- Total pelanggan
- Total layanan
- Jumlah transaksi hari ini
- Pendapatan hari ini

### Manajemen Pelanggan

- Menambah data pelanggan
- Menampilkan data pelanggan
- Mengubah data pelanggan
- Menghapus data pelanggan
- Menampilkan detail pelanggan

### Manajemen Layanan

- Menambah data layanan
- Menampilkan data layanan
- Mengubah data layanan
- Menghapus data layanan
- Menampilkan detail layanan

### Manajemen Transaksi

- Menambah transaksi laundry
- Menghitung total harga secara otomatis
- Mengubah data transaksi
- Menghapus data transaksi
- Menampilkan detail transaksi

### Laporan

- Pendapatan hari ini
- Pendapatan minggu ini
- Pendapatan bulan ini
- Export laporan ke Microsoft Excel

### REST API

REST API mendukung operasi:

- GET
- POST
- PUT
- DELETE

---

## Struktur Database

Sistem menggunakan tiga tabel utama.

### Tabel Pelanggan

| Field | Tipe |
|--------|------|
| id | bigint |
| nama | varchar |
| alamat | text |
| no_hp | varchar |

### Tabel Layanan

| Field | Tipe |
|--------|------|
| id | bigint |
| nama_layanan | varchar |
| harga | integer |

### Tabel Transaksi

| Field | Tipe |
|--------|------|
| id | bigint |
| pelanggan_id | bigint |
| layanan_id | bigint |
| berat_kg | integer |
| total_harga | integer |
| status | varchar |

---

## Teknologi yang Digunakan

- Laravel 13
- PHP 8
- MySQL
- Bootstrap 5
- Postman
- Laravel Excel

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

## Pengujian API

Pengujian REST API dilakukan menggunakan aplikasi Postman.

Metode yang diuji meliputi:

- GET
- POST
- PUT
- DELETE

Hasil pengujian menunjukkan bahwa seluruh endpoint berhasil dijalankan dan menghasilkan response JSON sesuai dengan kebutuhan sistem.

---

## Dokumentasi API

Dokumentasi REST API dapat diakses melalui Postman Collection yang tersedia pada repository ini.

File dokumentasi:

```text
laravel laundry-api.postman_collection.json
```

Collection tersebut berisi seluruh endpoint REST API yang digunakan pada sistem, meliputi:

- API Pelanggan
- API Layanan
- API Transaksi

Metode yang digunakan:

- GET
- POST
- PUT
- DELETE

Collection dapat diimport langsung ke aplikasi Postman untuk melakukan pengujian API.

---

## Hasil Implementasi

Berdasarkan hasil pengujian yang telah dilakukan, seluruh fitur aplikasi dapat berjalan dengan baik, meliputi:

- CRUD pelanggan berjalan dengan baik.
- CRUD layanan berjalan dengan baik.
- CRUD transaksi berjalan dengan baik.
- Dashboard statistik berjalan dengan baik.
- REST API berjalan dengan baik.
- Export laporan ke Excel berhasil dilakukan.

---

## Cara Menjalankan Aplikasi

### Clone Repository

```bash
git clone https://github.com/Anisya2030/web-api-laundry.git
```

### Masuk ke Direktori Project

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

### Generate Application Key

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

### Jalankan Migrasi Database

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

Nama : Anisya  
NIM : 240111018  
Program Studi : Informatika  
Universitas : Universitas Harapan Bangsa

---

## Lisensi

Aplikasi ini dibuat untuk keperluan pembelajaran dan tugas akademik.
