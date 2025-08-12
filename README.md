
```markdown
# 🚀 Baherindo Motor

Baherindo Motor adalah website untuk jual-beli motor second dengan harga terjangkau dan tampilan modern.  
Website ini dibangun menggunakan **Laravel** dan **TailwindCSS**, serta dilengkapi fitur kelola data motor, halaman About, Contact, dan tampilan Home yang elegan.

---

## 📌 Fitur Utama

- 🏠 **Halaman Home** dengan daftar motor terbaru
- 📝 **CRUD Motor** (Tambah, Edit, Hapus, Lihat Detail)
- ℹ **Halaman About** yang informatif
- 📞 **Halaman Contact** dengan form pengiriman pesan
- 📱 **Desain Responsif** (Mobile-friendly)
- 🎨 Tampilan modern menggunakan TailwindCSS

---

## 🛠️ Teknologi yang Digunakan

- [Laravel 10+](https://laravel.com/) — Framework PHP
- [Tailwind CSS](https://tailwindcss.com/) — Styling modern
- [Font Awesome](https://fontawesome.com/) — Ikon
- [MySQL](https://www.mysql.com/) — Database

---

## 📂 Struktur Folder Penting

```plaintext
.
├── app/            # Logika backend Laravel
├── public/         # Aset publik (gambar, CSS, JS)
├── resources/
│   ├── views/      # File Blade template
│   └── css/        # File TailwindCSS
├── routes/web.php  # Routing aplikasi
└── database/       # Migrasi dan seeder
```

---

## ⚙️ Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/username/baherindo-motor.git
   cd baherindo-motor
   ```

2. **Install dependency**
   ```bash
   composer install
   npm install
   ```

3. **Salin file `.env`**
   ```bash
   cp .env.example .env
   ```

4. **Generate key aplikasi**
   ```bash
   php artisan key:generate
   ```

5. **Konfigurasi database** di file `.env`
   ```env
   DB_DATABASE=baherindo_motor
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Jalankan migrasi**
   ```bash
   php artisan migrate
   ```

7. **Jalankan server**
   ```bash
   php artisan serve
   ```

8. Buka di browser:
   ```
   http://127.0.0.1:8000
   ```

---

## 📸 Screenshot

### Home Page
![Home Page](public/screenshots/home.png)

### About Page
![About Page](public/screenshots/about.png)

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan belajar dan pengembangan internal **Baherindo Motor**.  
Tidak diperkenankan digunakan untuk tujuan komersial tanpa izin.

---

## 💌 Kontak

📧 Email: baherindo@example.com  
📍 Lokasi: Bekasi, Indonesia  
📱 WhatsApp: +62 812-3456-7890
```

---
