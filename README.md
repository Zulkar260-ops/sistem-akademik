# Sistem Akademik

Aplikasi sistem akademik berbasis Laravel dan MySQL.

## Kebutuhan
- PHP 8.3 atau lebih baru
- Composer
- MySQL (bisa lewat Laragon/XAMPP)
- Node.js (jika memakai Vite)

## Cara Instalasi
1. Clone repository:
   git clone https://github.com/Zulkar260-ops/sistem-akademik.git
   cd sistem-akademik
2. Install dependensi:
   composer install
3. Salin file environment:
   copy .env.example .env
4. Buat kunci aplikasi:
   php artisan key:generate
5. Buat database kosong bernama `sistem_akademik_pemulihan` di MySQL.
6. Sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD di file `.env`.
7. Buat tabel:
   php artisan migrate --seed
   (atau impor file SQL di folder database/ lewat phpMyAdmin/HeidiSQL)
8. Jalankan aplikasi:
   php artisan serve
9. Buka http://127.0.0.1:8000
