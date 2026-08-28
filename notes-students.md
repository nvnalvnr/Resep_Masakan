# Catatan Review — Resep_Masakan

**Tanggal:** 28 Agustus 2026
**Branch:** `main` @ `9fa9d01`
**Cek:** `php -l` bersih · 25 tes lolos · 56 route resolve · tidak ada crash

---

## 📝 Catatan Kamu

_(jawab tiap pertanyaan, double click di bawahnya buat nulis jawabannya)_

**Sudah perbaiki link "Tambah Resep" yang 404 di halaman Edit User?**


**Sudah tambahin ikon hati terisi/outline di tombol favorit?**


**Sudah benerin redirect admin abis tambah resep?**


**Sudah benerin redirect abis edit resep dari "Resep Saya"?**


**Sudah tambahin nomor urut di tabel daftar user?**


**Sudah benerin font yang kekecilan?**


**Sudah tambah rate limit di `/api/login`?**


**Sudah hapus `resep_masakann.sql` dari git?**


**Sudah beresin `StoreRecipeRequest`, `UpdateRecipeRequest`, `RecipeResource` yang nggak kepake?**


**Sudah hapus view yang nggak kepake (`dashboard.blade.php`, `user/recipes.blade.php`)?**


---

## ✅ Yang Sudah Jalan

- Tamu bisa buka homepage, search, dan lihat detail resep — tanpa login
- Register, login, logout
- User: tambah / edit / hapus resep sendiri, upload gambar
- Simpan resep ke favorit, lihat daftar resep tersimpan
- Admin: dashboard statistik, daftar resep + search + filter hari ini
- Admin: lihat / edit / hapus resep siapa pun
- Admin: tambah user, edit nama/email/role user, hapus user
- API jalan (login token, CRUD resep)

---

## ❌ Yang Belum Jalan

### 1. Satu link "Tambah Resep" nyasar ke 404

`routes/web.php:281` vs `:322`

Route `/recipes/{recipe}` didaftarkan **di atas** `/recipes/create` di dalam
grup admin. Laravel baca route dari atas ke bawah dan berhenti di match
pertama — jadi kalau ada yang buka URL `/admin/recipes/create`, kata `create`
ketelan `{recipe}`, dicari sebagai ID resep, tidak ketemu, 404.

**Tapi ini bug kecil, bukan yang tampak waktu testing biasa.** Hampir semua
tombol "Tambah Resep" di aplikasi (dashboard, daftar resep, edit resep, daftar
user) memakai route `recipes.create` yang aman — bukan yang bentrok. Cuma
**satu** tempat yang salah pakai: sidebar di halaman
`resources/views/admin/users/edit.blade.php:600`, link-nya ke
`route('admin.recipes.create')`. Baru kena kalau buka halaman Edit User,
lalu klik "Tambah Resep" dari situ.

**Fix:** ganti `admin.recipes.create` jadi `recipes.create` di baris itu
(biar konsisten dengan halaman lain) — atau pindahkan blok `create`/`store`
ke atas `/recipes/{recipe}` di `routes/web.php` biar dua-duanya valid.

> Catatan: dia sudah paham konsep urutan route ini — di file yang sama
> (`routes/web.php:228`) dia menulis komentar menjelaskan kenapa
> `/recipes/{slug}` harus di bawah `/recipes/create`. Benar untuk route user,
> terlewat di route admin, dan cuma kepakai di satu halaman.

### 2. Tombol favorit tidak tahu status tersimpan

`resources/views/recipes/show.blade.php:1394-1422`

Selalu tampil ikon outline "♡ Simpan Resep". Klik kedua diam-diam menghapus
favorit, label dan ikonnya tidak pernah berubah. Penyebab: `RecipeController@show`
cuma kirim `$recipe`, tidak ada penanda apakah user sudah menyimpan resep itu.

**Fix — ada 2 bagian, logic dan tampilan:**

1. **Logic (controller):** di `RecipeController@show`, tambah pengecekan
   apakah user login sudah favorit-kan resep ini, kirim ke view:
   ```php
   $isFavorited = auth()->check()
       ? $recipe->favorites()->where('user_id', auth()->id())->exists()
       : false;

   return view('recipes.show', compact('recipe', 'isFavorited'));
   ```

2. **Tampilan (view):** ganti ikon dan teks berdasarkan `$isFavorited` —
   **terisi/solid kalau sudah favorit, outline kalau belum**:
   ```blade
   <span>
       @if($isFavorited)
           ♥ &nbsp; Hapus dari Tersimpan
       @else
           ♡ &nbsp; Simpan Resep
       @endif
   </span>
   ```
   Tambahin juga class biar warnanya beda pas sudah favorit (misal
   `.favorite-button.is-favorited { color: var(--terracotta); }` di
   `<style>` sekitar baris 708), biar keliatan langsung dari warnanya juga,
   nggak cuma dari teksnya.

### 3. Admin salah halaman setelah tambah resep

`app/Http/Controllers/RecipeController.php` — method `store()`, bagian akhir:

```php
return redirect()
    ->route('recipes.my')
    ->with('success', 'Resep berhasil ditambahkan.');
```

Route `POST admin/recipes` (`routes/web.php:337`) juga diarahkan ke method
`store()` yang sama ini. Jadi kalau admin nambah resep lewat panel admin,
dia ikut kelempar ke "Resep Saya" (halaman user), bukan balik ke daftar
resep admin.

**Cara benerin:**

1. Buka `app/Http/Controllers/RecipeController.php`, cari method `store()`
2. Cek role user yang login, redirect beda tujuan tergantung role:
   ```php
   return redirect()
       ->route(
           auth()->user()->role === 'admin'
               ? 'admin.recipes.index'
               : 'recipes.my'
       )
       ->with('success', 'Resep berhasil ditambahkan.');
   ```
3. Test: tambah resep sebagai admin → harus balik ke daftar resep admin.
   Tambah resep sebagai user biasa → tetap balik ke "Resep Saya"

### 4. Edit resep dari "Resep Saya" nyasar ke halaman post, bukan balik ke daftar

`app/Http/Controllers/RecipeController.php` — method `update()`, bagian akhir:

```php
return redirect()
    ->route('recipes.show', $recipe->slug)   // → /recipes/{slug}
    ->with('success', 'Resep berhasil diperbarui.');
```

Edit link di `resources/views/recipes/my.blade.php:1557` pakai route
`recipes.edit` (bukan yang khusus admin). Jadi kalau resep diedit lewat
halaman "Resep Saya", setelah simpan malah dilempar ke halaman single-post
publik (`/recipes/matcha-cheese-cakeeeeee`), bukan balik ke "Resep Saya".

**Bukan bug baru** — ini perilaku lama, tidak berubah dari sebelumnya.
Tapi bikin alur terasa aneh: user harus klik back atau cari menu lagi buat
lihat daftar resepnya.

**Cara benerin (kasih tahu dia langkahnya):**

1. Buka `app/Http/Controllers/RecipeController.php`, cari method `update()`
2. Ganti baris redirect-nya jadi:
   ```php
   return redirect()
       ->route('recipes.my')
       ->with('success', 'Resep berhasil diperbarui.');
   ```
3. Test: edit resep dari "Resep Saya" → harus balik ke "Resep Saya", bukan ke
   halaman post

---

## 💡 Saran Tambahan (bukan bug)

### Tabel daftar user belum ada nomor urut

`resources/views/admin/users/index.blade.php:1633-1651` (header) dan
`:1662` (baris data)

Tabel "Daftar Pengguna" langsung mulai dari kolom Pengguna, tidak ada
nomor urut (1, 2, 3, ...). Enak buat dilihat kalau ditambahin.

**Cara benerin:**

1. Di `<thead>`, tambah kolom baru sebelum `Pengguna` (baris ~1635):
   ```blade
   <th>No</th>
   ```
2. Di dalam `@foreach($users as $user)`, tambah `<td>` pertama di setiap
   `<tr>` (baris ~1662):
   ```blade
   <td>{{ $loop->iteration }}</td>
   ```
   `$loop->iteration` otomatis kasih nomor urut per baris (1, 2, 3, ...)
   dari Blade, tidak perlu hitung manual.
3. Kalau tabelnya dipaginate dan mau nomornya lanjut antar halaman
   (bukan reset ke 1 tiap halaman), pakai:
   ```blade
   {{ $users->firstItem() + $loop->index }}
   ```

Sama juga berlaku buat tabel resep di `admin/recipes/index.blade.php`
kalau mau konsisten.

### Font-nya kekecilan hampir di semua halaman

Cek `resources/views/recipes/show.blade.php` aja — ada `font-size: 8px`,
`9px`, `10px`, `11px` bertebaran di `<style>`-nya (baris 177, 201, 228, 248,
dst). Browser default itu 16px, jadi ini jauh di bawah normal — susah dibaca,
apalagi di HP. Pola yang sama ada di hampir semua file Blade lain juga
(total 257 baris `font-size` kecil ditemukan di seluruh `resources/views/`).

**Cara benerin:**

1. Body text (paragraf, label, deskripsi) minimal `14px`, idealnya `16px`
2. Teks kecil (badge, caption, timestamp) boleh `12px`, jangan di bawah itu
3. Karena tiap halaman punya `<style>` sendiri-sendiri, benerin satu-satu
   agak capek — kalau mau sekalian rapiin, pindahkan style yang sama ke
   satu file (`resources/css/app.css`) terus set ukuran dasarnya di situ,
   biar ganti sekali kepakai ke semua halaman (lihat saran kode mati di atas)

---

## ⚠️ Error / Risiko

### Keamanan

#### `/api/login` tanpa rate limit

`routes/api.php:19` — `Route::post('/login', [AuthController::class, 'login']);`
Tidak ada batas percobaan. Orang bisa coba password berkali-kali tanpa henti
(brute force). Login web sudah aman lewat Breeze, API-nya tidak.

**Cara benerin:**

1. Buka `routes/api.php`
2. Tambah middleware throttle di route login:
   ```php
   Route::post('/login', [AuthController::class, 'login'])
       ->middleware('throttle:6,1');
   ```
   Artinya: maksimal 6 percobaan per 1 menit dari IP yang sama.
3. Test: kirim request login salah lebih dari 6x cepat-cepat lewat Postman/
   Thunder Client → response ke-7 harus `429 Too Many Requests`

#### Dump database ikut ter-commit

`resep_masakann.sql` — file dump phpMyAdmin, isinya `INSERT INTO users`
dengan email asli + password ter-hash. Ini bahaya kalau repo-nya public
atau dibagikan.

**Cara benerin:**

1. Hapus file dari tracking git (file lokalnya tetap ada, cuma keluar dari repo):
   ```
   git rm --cached resep_masakann.sql
   ```
2. Buka `.gitignore`, tambah baris:
   ```
   *.sql
   ```
3. Commit:
   ```
   git commit -m "Hapus dump database dari git"
   ```
4. Kalau perlu contoh data buat setup ulang project, pakai seeder
   (`database/seeders/RecipeSeeder.php`, `UserSeeder.php`) yang sudah ada,
   bukan file `.sql` mentah.

### Kode Mati

Tiga file ini ditulis tapi tidak pernah dipanggil dari mana pun — controller
masih pakai validasi inline manual, bukan class ini:

- `app/Http/Requests/StoreRecipeRequest.php`
- `app/Http/Requests/UpdateRecipeRequest.php`
- `app/Http/Resources/RecipeResource.php`

**Cara benerin — pilih salah satu:**

- **Opsi A (pakai beneran):** di `RecipeController@store`, ganti
  `$request->validate([...])` jadi terima `StoreRecipeRequest $request`
  langsung sebagai parameter method, validasinya otomatis jalan duluan.
  Sama pola buat `update()` pakai `UpdateRecipeRequest`.
- **Opsi B (hapus saja):** kalau tidak mau dipakai, hapus ketiga file itu
  biar tidak bingung baca kode mana yang aktif.

Dua view ini juga tidak ada yang render lagi (cek: tidak ada satupun
`view('dashboard')` atau `view('user.recipes')` di controller manapun) —
aman dihapus:

- `resources/views/dashboard.blade.php` (1716 baris)
- `resources/views/user/recipes.blade.php` (1301 baris)

Total Blade sekarang 29.804 baris, sebagian besar `<style>` inline yang
diulang tiap halaman. Tailwind + Vite sudah terpasang (`vite.config.js`,
`tailwind.config.js`) tapi hampir tidak dipakai — kalau mau dirapikan,
pindahkan CSS yang sama persis di banyak file ke satu tempat, misal
`resources/css/app.css`, biar tidak ditulis ulang tiap halaman.

---

## 📈 Progres dari Review Sebelumnya

**Sudah diperbaiki sendiri — tanpa diberi tahu:**

1. Detail resep sekarang publik (`routes/web.php:236`) — sebelumnya tamu selalu
   dilempar ke `/login`
2. Tombol simpan favorit sekarang ada — sebelumnya route-nya jalan tapi tidak ada
   tombol yang memanggil
3. `RecipePolicy` akhirnya dipakai — 5 pemanggilan `authorize()` di
   `RecipeController`, filter `where('user_id', ...)` yang lama dihapus
4. Admin bisa edit nama + email user, bukan cuma role
5. Tes membaik — `RefreshDatabase` di `ExampleTest`, `assertAuthenticatedAs`
   di `AuthenticationTest`

**Belum disentuh:** rate limit API, dump SQL di git, tiga class yang menganggur.

---

## 💬 Yang Perlu Disampaikan

Kamu memang meningkat. Dua bug serius dari review sebelumnya kamu perbaiki
sendiri, dan caranya benar. Query `orWhereHas` untuk search berdasarkan nama
penulis itu Eloquent yang bagus.

**Satu pelajaran utama:** kamu mengecek kode *jalan*, bukan fitur *berfungsi*.

Kedua masalah ronde ini polanya sama. Tidak ada syntax error, tes lolos,
`route:list` terlihat normal di atas kertas — tapi dua fitur rusak di browser.
Bug admin dan tombol favorit sama-sama ketahuan dalam sepuluh detik kalau kamu
login sebagai admin dan klik tiap link di sidebar.

**Aturan yang bisa kamu pakai:**

1. Sebelum push — login sebagai tiap role, klik semua link yang kamu sentuh
2. Route spesifik (`/create`) selalu di atas wildcard (`/{id}`) — Laravel ambil
   match pertama
3. Tulis satu feature test untuk tiap route baru

**Catatan tambahan:** kamu memperbaiki semua yang *terlihat di layar* dan
melewati semua yang tidak — rate limit API, dump database. Bug keamanan tidak
muncul sendiri di UI. Kebiasaan ini bagus dibangun mulai sekarang.
