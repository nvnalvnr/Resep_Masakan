# Cara Bikin Auto Testing buat API

Panduan ini buat kamu yang udah capek testing API manual pakai Postman/
Thunder Client tiap kali ubah kode. Auto testing ngejalanin semua skenario
itu otomatis, sekali command, cuma beberapa detik.

---

## Kenapa Penting

Project ini punya API di `routes/api.php` (login, CRUD resep) tapi belum
ada satupun test buat itu — cuma web-nya yang ada test. Artinya tiap kali
kamu ubah `AuthController` atau `RecipeController` di `app/Http/Controllers/Api/`,
kamu harus cek manual satu-satu lewat Postman: login benar, login salah,
tambah resep, tambah resep tanpa login, dst. Gampang kelewat satu skenario.

Auto testing nyimpen semua skenario itu jadi kode. Sekali kamu jalanin
`php artisan test`, semua dicek ulang otomatis.

---

## Struktur Folder Testing

```
tests/
├── TestCase.php                          ← base class, dipakai semua test
├── Feature/                              ← test yang lewat HTTP request beneran
│   │
│   ├── Api/                              ← 📁 FOLDER BARU, khusus test API
│   │   ├── AuthApiTest.php               ← test login & logout API
│   │   └── RecipeApiTest.php             ← test CRUD resep API
│   │
│   ├── Auth/                             ← test punya Breeze (login web, dll)
│   │   ├── AuthenticationTest.php
│   │   ├── EmailVerificationTest.php
│   │   ├── PasswordConfirmationTest.php
│   │   ├── PasswordResetTest.php
│   │   ├── PasswordUpdateTest.php
│   │   └── RegistrationTest.php
│   │
│   ├── ExampleTest.php
│   ├── ProfileTest.php
│   └── RoleNavigationTest.php
│
└── Unit/                                 ← test logic kecil, tanpa HTTP
    └── ExampleTest.php
```

**Aturan penempatan:** test yang manggil route API (`/api/...`) taruh di
`tests/Feature/Api/`. Test yang manggil route web biasa taruh langsung
di `tests/Feature/` atau subfolder lain kayak `Auth/`. Folder `Api/` di
atas itu baru, sebelumnya belum ada — dibikin khusus biar nggak campur
sama test web.

---

## Step-by-Step Bikin Test API dari Nol

Contoh: bikin test buat endpoint `GET /api/recipes`.

**Langkah 1 — bikin file test pakai Artisan**

Buka terminal di folder project, jalankan:

```
php artisan make:test Api/RecipeApiTest
```

Artisan otomatis bikin file `tests/Feature/Api/RecipeApiTest.php` isinya
kerangka kosong kayak gini:

```php
<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecipeApiTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
```

**Langkah 2 — tambah `use RefreshDatabase`**

Biar database dikosongin ulang tiap test jalan, tambah baris ini di
dalam class, paling atas:

```php
class RecipeApiTest extends TestCase
{
    use RefreshDatabase;   // ← tambahin ini

    public function test_example(): void
    {
        // ...
    }
}
```

**Langkah 3 — import model yang dibutuhin**

Di paling atas file, di bawah `namespace`, tambah:

```php
use App\Models\Recipe;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
```

**Langkah 4 — hapus `test_example`, ganti sama test beneran**

Ganti isi method `test_example` (atau hapus, ganti dengan method baru)
jadi kayak gini:

```php
public function test_siapa_saja_bisa_lihat_daftar_resep_tanpa_login(): void
{
    // siapin: bikin 3 resep dummy di database
    Recipe::factory()->count(3)->create();

    // jalankan: kirim GET request ke endpoint-nya
    $response = $this->getJson('/api/recipes');

    // cek: pastikan responnya sukses
    $response->assertStatus(200)
        ->assertJson(['success' => true]);
}
```

**Langkah 5 — jalankan, pastikan lolos**

```
php artisan test --filter=RecipeApiTest
```

Kalau muncul tulisan hijau `PASS`, test-nya udah bener.

**Langkah 6 — tambah test buat skenario lain**

Copy method di langkah 4, ganti nama method dan isinya buat skenario
lain (misal: cari resep pakai `search`, resep yang ID-nya nggak ada, dst).
Satu method = satu skenario. Lihat tabel skenario di bawah buat ide apa
aja yang perlu dites per endpoint.

---

## Sudah Dibikinin 2 File Contoh

- `tests/Feature/Api/AuthApiTest.php` — 6 test buat login/logout
- `tests/Feature/Api/RecipeApiTest.php` — 13 test buat CRUD resep

Semua udah dites, 19/19 lolos. Jalanin sendiri buat lihat:

```
php artisan test --filter=Api
```

Baca kedua file itu pelan-pelan sebelum lanjut — semua pola di bawah ini
diambil dari situ.

---

## Struktur Satu Test

```php
public function test_nama_yang_jelas_apa_yang_dicek(): void
{
    // 1. SIAPKAN — data apa yang dibutuhin sebelum request
    $user = User::factory()->create();

    // 2. JALANKAN — kirim request kayak beneran manggil API
    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    // 3. CEK — pastikan hasilnya sesuai yang diharapkan
    $response->assertStatus(200);
}
```

Tiga bagian ini selalu ada: **siapin data → kirim request → cek hasil.**

---

## Perintah yang Sering Dipakai

**Kirim request ke API** (otomatis kirim sebagai JSON):
```php
$this->getJson('/api/recipes');
$this->postJson('/api/recipes', ['title' => '...']);
$this->putJson('/api/recipes/1', ['title' => '...']);
$this->deleteJson('/api/recipes/1');
```

**Login sebagai user tertentu** (buat route yang butuh `auth:sanctum`):
```php
use Laravel\Sanctum\Sanctum;

Sanctum::actingAs($user);
```
Taruh ini sebelum request — abis itu request dianggap datang dari user itu.

**Bikin data dummy pakai factory** (nggak perlu isi form manual):
```php
$user = User::factory()->create();
$admin = User::factory()->create(['role' => 'admin']);
$recipe = Recipe::factory()->create(['user_id' => $user->id]);
```

**Cek response:**
```php
$response->assertStatus(200);                          // status code
$response->assertJson(['success' => true]);             // ada field ini
$response->assertJsonStructure(['data' => ['token']]);  // bentuk json-nya
```

**Cek database beneran berubah:**
```php
$this->assertDatabaseHas('recipes', ['title' => 'Resep Baru']);
$this->assertDatabaseMissing('recipes', ['id' => $recipe->id]);
$this->assertDatabaseCount('personal_access_tokens', 0);
```

---

## Tiap Endpoint, Skenario Apa Aja yang Perlu Dites

Pola pikirnya: buat **1 endpoint**, minimal cek **jalur benar** dan
**jalur salah**.

| Endpoint | Jalur benar | Jalur salah yang wajib dicek |
|---|---|---|
| `POST /api/login` | Email+password benar → dapat token | Email salah, password salah, field kosong |
| `POST /api/logout` | Ada token → berhasil, token jadi invalid | Tanpa token → ditolak |
| `GET /api/recipes` | Tanpa login tetap bisa lihat | Search filter beneran nyaring data |
| `GET /api/recipes/{id}` | ID ada → data muncul | ID nggak ada → 404 |
| `POST /api/recipes` | Login → resep tersimpan di database | Belum login → ditolak, judul kosong → ditolak |
| `PUT /api/recipes/{id}` | Punya sendiri → bisa diubah | Punya orang lain → ditolak (403), admin → boleh ubah punya siapa aja |
| `DELETE /api/recipes/{id}` | Punya sendiri → kehapus dari database | Punya orang lain → ditolak, belum login → ditolak |

Ini persis skenario yang udah ada di dua file contoh. Kalau nanti nambah
endpoint API baru, isi tabel kayak gini dulu di kepala kamu sebelum nulis
test-nya.

---

## Cara Jalanin Testing

**Jalanin semua test di project** (web + API):
```
php artisan test
```

**Jalanin cuma folder API aja:**
```
php artisan test tests/Feature/Api
```

**Jalanin cuma satu file:**
```
php artisan test tests/Feature/Api/RecipeApiTest.php
```

**Jalanin berdasarkan nama method/class** (nggak perlu path lengkap,
tinggal ketik kata kunci yang ada di namanya):
```
php artisan test --filter=RecipeApiTest
php artisan test --filter=test_user_bisa_login_lewat_api_dan_dapat_token
```

**Baca hasilnya:**
- Titik hijau / tulisan `PASS` — test lolos
- Tulisan `FAIL` merah — test gagal, di bawahnya ada penjelasan bagian
  mana yang nggak sesuai sama yang di-`assert`
- Kalau ada `FAIL`, baca pesan errornya dulu pelan-pelan sebelum ubah
  kode — biasanya udah kasih tau baris mana yang salah

**Pas lagi nulis test baru,** biasakan pola ini:
1. Jalanin cuma file yang lagi dikerjain (`--filter=NamaClassnya`) —
   lebih cepat daripada nunggu semua test lain ikut jalan
2. Kalau udah lolos, baru jalanin `php artisan test` tanpa filter —
   mastiin kode baru nggak ikut ngerusak test lain yang udah ada

---

## Kapan Harus Jalanin Ini

- Sebelum push kode yang nyenggol `app/Http/Controllers/Api/` atau
  `routes/api.php`
- Abis nambah endpoint API baru — tulis test-nya bareng, jangan nyusul
- Kalau nemu bug di API pas testing manual — tulis dulu test yang
  gagal ngebuktiin bug-nya ada, baru benerin kodenya, baru test-nya
  harus lolos. Cara ini mastiin bug yang sama nggak balik lagi nanti.
