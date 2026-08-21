# Catatan Perbaikan Bug Proyek Resep Masakan

Dokumen ini menjelaskan masalah yang ditemukan, penyebabnya, dan perbaikan yang sudah diterapkan. Tujuannya bukan untuk menyalahkan, tetapi agar struktur proyek berikutnya lebih konsisten dan mudah dirawat.

## Ringkasan hasil

- Route yang dipakai oleh halaman Blade sekarang sudah terdaftar.
- Login admin dan user diarahkan ke dashboard sesuai role.
- Sidebar admin dan user menggunakan satu komponen bersama.
- Nama role pada navigasi diambil dari akun yang sedang login, bukan ditulis manual.
- Ikon sidebar memakai satu komponen SVG sehingga bentuk dan ukurannya konsisten.
- Halaman tambah, detail, edit, dan hapus resep memakai route sesuai role.
- Halaman edit role user admin yang sebelumnya tidak ada sudah dibuat.
- Admin dapat membuat akun user/admin baru dari halaman Data User.
- Halaman daftar resep admin dan tambah resep menggunakan layout sidebar tanpa navbar.
- Upload gambar dapat diakses melalui `public/storage`.
- Slug dibuat otomatis dan tetap unik, termasuk ketika judul resep diubah.
- CSS tambahan baru dipisahkan ke folder `resources/css`.

## 1. Route bernama tidak tersedia

### Masalah

Beberapa view memanggil nama route yang tidak ada atau sudah berubah, misalnya `recipes.index`, `user.recipes`, dan `dashboard`. Laravel langsung melempar `RouteNotFoundException` ketika mencoba merender pemanggilan `route(...)` tersebut.

Selain itu, route admin untuk membuat resep dan mengedit user sudah didaftarkan, tetapi controller atau file Blade tujuannya belum lengkap. Route yang terdaftar belum tentu dapat digunakan jika method controller atau view-nya tidak tersedia.

### Perbaikan

- Memastikan `recipes.index` tersedia untuk halaman utama.
- Mengganti referensi lama `user.recipes` menjadi `recipes.my`.
- Menambahkan route bernama `dashboard` sebagai pengarah berdasarkan role.
- Memindahkan dashboard user aktual ke `/user/dashboard`.
- Melengkapi method `create` dan `store` pada controller resep admin.
- Menggunakan halaman detail dan edit resep bersama untuk admin dan user, tetapi action-nya menyesuaikan role.
- Membuat `resources/views/admin/users/edit.blade.php`.
- Menambahkan route `admin.users.create` dan `admin.users.store` untuk pembuatan akun oleh admin.

### Pelajaran

Setelah mengubah route, cari semua pemakaian nama route lama di controller dan Blade. Gunakan perintah berikut untuk memeriksa daftar route:

```bash
php artisan route:list
```

## 2. Redirect login tidak konsisten dengan role

### Masalah

Beberapa bagian autentikasi Laravel Breeze mengharapkan route bernama `dashboard`, sedangkan proses login khusus sudah mengarahkan user dan admin ke dashboard yang berbeda.

### Perbaikan

Route `dashboard` sekarang menjadi pengarah:

- role `admin` menuju `admin.dashboard`;
- role `user` menuju `user.dashboard`.

Proses login tetap langsung mengarahkan akun ke dashboard sesuai role. Pengujian login juga diperbarui untuk kedua role.

## 3. Sidebar, role, dan ikon tidak konsisten

### Masalah

Sidebar sebelumnya disalin ke banyak file. Akibatnya, menu, route, teks role, dan ikon berbeda antarhalaman. Beberapa halaman selalu menampilkan teks `User`, termasuk ketika akun yang login adalah admin. Ikon juga bercampur antara emoji dan bentuk lain.

### Perbaikan

- Membuat komponen `resources/views/components/role-sidebar.blade.php`.
- Membuat komponen ikon SVG `resources/views/components/nav-icon.blade.php`.
- Menu sidebar ditentukan dari `auth()->user()->role`.
- Teks role ditampilkan secara dinamis dengan `ucfirst(auth()->user()->role)`.
- Sidebar yang sama dipakai pada dashboard, daftar resep, tambah resep, edit resep, detail resep, favorit, dan manajemen user.

Dengan komponen bersama, perubahan menu atau ikon berikutnya cukup dilakukan di satu tempat.

## 4. Layout dashboard admin rusak dan navbar berulang

### Masalah

Halaman daftar resep admin memakai CSS inline lama yang memiliki nama class umum seperti `.container`, `.topbar`, dan `.btn`. Style tersebut bertabrakan dengan layout sidebar bersama sehingga posisi dan ukuran konten rusak. Halaman tambah resep juga masih menampilkan navbar meskipun navigasi utama sudah tersedia di sidebar.

### Perbaikan

- Membangun ulang halaman `/admin/recipes` sebagai layout sidebar dan area konten.
- Menghapus navbar dari halaman tambah resep.
- Memindahkan style daftar resep admin ke `resources/css/admin-recipes.css`.
- Menyeragamkan ikon aksi lihat, edit, dan hapus menggunakan komponen SVG.
- Menambahkan tampilan kosong dan grid responsif untuk daftar resep.

## 5. Gambar upload tidak tampil

### Masalah

File upload sebenarnya berhasil tersimpan di:

```text
storage/app/public/recipes
```

Namun folder publik `public/storage` belum terhubung ke storage Laravel. Browser tidak dapat mengambil file langsung dari `storage/app`.

### Perbaikan

Storage link dibuat dengan:

```bash
php artisan storage:link
```

Model `Recipe` menyediakan `imageUrl()` agar:

- URL gambar lama (`http://` atau `https://`) tetap dapat dipakai;
- gambar upload lokal diarahkan ke `/storage/recipes/...`.

Semua halaman aktif menggunakan `imageUrl()` untuk menampilkan gambar, termasuk halaman single post/detail.

### Catatan untuk komputer baru

Folder `public/storage` biasanya tidak ikut Git karena berupa symbolic link/junction. Setelah melakukan clone atau pull pada komputer lain, jalankan lagi:

```bash
php artisan storage:link
```

## 6. Slug resep

### Masalah

Kolom `slug` wajib di database, tetapi seeder lama tidak mengisinya. Hal tersebut menyebabkan error:

```text
Field 'slug' doesn't have a default value
```

Judul yang menghasilkan slug kosong juga dapat membuat data kurang aman untuk route detail.

### Perbaikan

- Seeder sekarang mengisi slug.
- Tambah dan edit resep membuat slug unik secara otomatis.
- Jika hasil slug kosong, digunakan dasar `resep`.
- Jika slug sudah dipakai, ditambahkan nomor seperti `nasi-goreng-1`.

## 7. Manajemen user oleh admin

Admin sekarang dapat membuka halaman Data User dan menekan tombol `Tambah User`. Form tersebut mendukung:

- nama;
- email unik;
- role `admin` atau `user`;
- password minimal delapan karakter;
- konfirmasi password;
- hashing password sebelum disimpan.

Halaman tambah dan edit user menggunakan sidebar tanpa navbar.

## 8. Pemisahan CSS dan JavaScript

CSS tambahan untuk sidebar dan form admin ditempatkan pada:

- `resources/css/sidebar.css`;
- `resources/css/admin-forms.css`;
- `resources/css/admin-recipes.css` untuk halaman daftar resep admin.

Ketiganya diimpor melalui `resources/css/app.css` dan dibangun oleh Vite. Tidak ada JavaScript tambahan baru untuk perbaikan ini.

Masih terdapat CSS inline bawaan pada beberapa view lama. Itu tidak langsung menyebabkan error, tetapi menjadi utang teknis. Untuk pengembangan berikutnya, pindahkan CSS per halaman secara bertahap ke `resources/css` dan hindari menyalin blok style besar ke banyak Blade.

## 9. Verifikasi yang sudah dijalankan

Hasil pemeriksaan setelah perbaikan:

```text
php artisan route:list       berhasil, termasuk route tambah dan simpan user admin
php artisan view:cache       berhasil
npm.cmd run build            berhasil
php artisan test             berhasil, 29 test dan 77 assertion
Pemeriksaan route Blade      34 nama route, semuanya tersedia
Pemeriksaan file upload      file dapat diakses melalui public/storage
```

## Checklist saat menjalankan proyek setelah clone/pull

Jalankan dari Git Bash di folder proyek:

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
npm install
npm run build
php artisan serve
```

Jika `.env` sudah ada dan berisi konfigurasi database yang benar, jangan menimpanya dengan `cp .env.example .env`. Pastikan `APP_KEY` terisi. Setelah mengubah `.env`, bersihkan cache konfigurasi:

```bash
php artisan optimize:clear
```

## Saran struktur berikutnya

- Gunakan layout Blade bersama untuk mengurangi HTML yang berulang.
- Gunakan policy atau authorization Laravel untuk aturan kepemilikan resep.
- Tambahkan feature test setiap kali menambah route admin/user.
- Jangan mengandalkan file upload di Git; storage aplikasi harus disiapkan pada setiap environment.
- Jalankan test dan build sebelum push ke branch utama.
