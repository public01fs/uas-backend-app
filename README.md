# 📦 Sistem Backend Inventori API - Laravel 12

Tugas ini disusun untuk memenuhi syarat **Ujian Akhir Semester (UAS) Pemrograman Backend**. Sistem ini menyediakan layanan RESTful API untuk pengelolaan data produk dan kategori dengan fitur autentikasi keamanan.

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

## 🚀 Fitur Utama
- **Autentikasi API**: Menggunakan Laravel Sanctum (Token-based).
- **Password Hashing**: Keamanan password menggunakan Bcrypt.
- **Relasi Database**: Implementasi *One-to-Many* antara Kategori dan Produk.
- **Operasi CRUD**: Mendukung Create, Read, Update, dan Delete untuk semua entitas.
- **Respon JSON**: Mengikuti standar REST API dengan HTTP Status Codes.

## 🛠️ Arsitektur Tabel
Sistem ini menggunakan dua tabel utama di luar tabel User:
1. **Categories**: Menyimpan kategori produk (Kolom: `name` [String], `priority` [Integer]).
2. **Products**: Menyimpan detail barang (Kolom: `name`, `price` [Integer], `description`, `category_id`).



## 📋 Endpoint API

### 🔐 Autentikasi
| Method | Endpoint | Fungsi |
| :--- | :--- | :--- |
| `POST` | `/api/register` | Mendaftarkan akun mahasiswa baru |
| `POST` | `/api/login` | Login untuk mendapatkan Bearer Token |

### 🛍️ Produk (CRUD)
| Method | Endpoint | Fungsi |
| :--- | :--- | :--- |
| `GET` | `/api/products` | Menampilkan semua produk & relasi kategori |
| `POST` | `/api/products` | Menambah produk baru (Auth Required) |
| `PUT` | `/api/products/{id}` | Memperbarui data produk |
| `DELETE` | `/api/products/{id}` | Menghapus data produk |



## 💻 Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek di lokal:

```bash
# 1. Clone repository ini
git clone [https://github.com/public01fs/uas-backend-app.git](https://github.com/public01fs/uas-backend-app.git)

# 2. Masuk ke folder proyek
cd uas-backend-app

# 3. Install dependencies
composer install

# 4. Konfigurasi Environment
cp .env.example .env
php artisan key:generate

# 5. Jalankan Migrasi Database
php artisan migrate

# 6. Jalankan Server
php artisan serve

---
**Disusun Oleh:**
* **Nama** : Eko Yudha Prasetya
* **NIM** : 202576420007
* **Prodi**: Teknik Informatika / Sistem Informasi

**Link Repository:** [https://github.com/public01fs/uas-backend-app](https://github.com/public01fs/uas-backend-app)