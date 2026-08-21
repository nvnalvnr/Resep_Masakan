<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where(
            'email',
            'novanialefniar12@gmail.com'
        )->first();

        $user = User::where(
            'email',
            'user@gmail.com'
        )->first();

        // 1. Nasi Goreng Spesial
        Recipe::create([
            'user_id' => $admin->id,
            'title' => 'Nasi Goreng Spesial',
            'slug' => Str::slug('Nasi Goreng Spesial'),
            'ingredients' => "2 piring nasi putih
2 butir telur
3 siung bawang putih
2 siung bawang merah
2 sdm kecap manis
1 sdm saus tiram
1 batang daun bawang
Garam secukupnya
Lada secukupnya
Minyak untuk menumis",
            'steps' => "1. Panaskan minyak lalu tumis bawang putih dan bawang merah.
2. Masukkan telur dan orak-arik hingga matang.
3. Masukkan nasi putih lalu aduk rata.
4. Tambahkan kecap manis, saus tiram, garam, dan lada.
5. Masukkan daun bawang.
6. Aduk hingga semua bahan tercampur rata.
7. Sajikan selagi hangat.",
        ]);

        // 2. Pasta Carbonara Creamy
        Recipe::create([
            'user_id' => $admin->id,
            'title' => 'Pasta Carbonara Creamy',
            'slug' => Str::slug('Pasta Carbonara Creamy'),
            'ingredients' => "200 gram spaghetti
100 ml susu cair
50 gram keju parmesan
2 butir telur
2 siung bawang putih
50 gram smoked beef
1 sdm mentega
Lada hitam secukupnya
Garam secukupnya",
            'steps' => "1. Rebus spaghetti hingga al dente.
2. Tumis bawang putih dan smoked beef dengan mentega.
3. Campurkan telur, susu, dan keju parmesan dalam mangkuk.
4. Masukkan spaghetti ke dalam tumisan.
5. Matikan api lalu tuangkan campuran saus.
6. Aduk cepat hingga saus menjadi creamy.
7. Tambahkan lada hitam dan sajikan.",
        ]);

        // 3. Chicken Katsu Curry
        Recipe::create([
            'user_id' => $user->id,
            'title' => 'Chicken Katsu Curry',
            'slug' => Str::slug('Chicken Katsu Curry'),
            'ingredients' => "1 dada ayam
100 gram tepung terigu
100 gram tepung panir
1 butir telur
2 buah kentang
1 buah wortel
1/2 buah bawang bombai
2 sdm bumbu kari
300 ml air
Garam secukupnya
Minyak untuk menggoreng",
            'steps' => "1. Pipihkan dada ayam lalu bumbui dengan garam.
2. Balurkan ayam ke tepung terigu, telur, lalu tepung panir.
3. Goreng ayam hingga berwarna keemasan.
4. Tumis bawang bombai hingga harum.
5. Masukkan kentang dan wortel.
6. Tambahkan air dan bumbu kari.
7. Masak hingga sayuran empuk dan kuah mengental.
8. Potong chicken katsu lalu sajikan bersama nasi dan curry.",
        ]);

        // 4. Beef Teriyaki Rice Bowl
        Recipe::create([
            'user_id' => $user->id,
            'title' => 'Beef Teriyaki Rice Bowl',
            'slug' => Str::slug('Beef Teriyaki Rice Bowl'),
            'ingredients' => "200 gram daging sapi iris tipis
2 sdm saus teriyaki
1 sdm kecap manis
1/2 buah bawang bombai
1 siung bawang putih
1 sdt minyak wijen
1 batang daun bawang
1 mangkuk nasi putih
Wijen secukupnya",
            'steps' => "1. Tumis bawang putih dan bawang bombai hingga harum.
2. Masukkan irisan daging sapi.
3. Masak hingga daging berubah warna.
4. Tambahkan saus teriyaki dan kecap manis.
5. Masukkan minyak wijen.
6. Masak hingga bumbu meresap.
7. Sajikan di atas nasi putih.
8. Tambahkan daun bawang dan wijen.",
        ]);

        // 5. Avocado Egg Toast
        Recipe::create([
            'user_id' => $admin->id,
            'title' => 'Avocado Egg Toast',
            'slug' => Str::slug('Avocado Egg Toast'),
            'ingredients' => "2 lembar roti gandum
1 buah alpukat matang
2 butir telur
1 sdt air lemon
Garam secukupnya
Lada hitam secukupnya
Chili flakes secukupnya
1 sdt mentega",
            'steps' => "1. Panggang roti hingga kecokelatan.
2. Haluskan alpukat bersama air lemon.
3. Tambahkan garam dan lada.
4. Masak telur sesuai selera.
5. Oleskan alpukat di atas roti.
6. Letakkan telur di atas alpukat.
7. Taburkan chili flakes.
8. Sajikan selagi hangat.",
        ]);

        // 6. Creamy Mie Chili Oil
        Recipe::create([
            'user_id' => $user->id,
            'title' => 'Creamy Mie Chili Oil',
            'slug' => Str::slug('Creamy Mie Chili Oil'),
            'ingredients' => "1 bungkus mie
1 butir telur
2 sdm chili oil
2 sdm susu cair
1 siung bawang putih
1 sdm kecap asin
1 sdt minyak wijen
Daun bawang secukupnya
Wijen secukupnya",
            'steps' => "1. Rebus mie hingga matang lalu tiriskan.
2. Tumis bawang putih hingga harum.
3. Masukkan chili oil dan kecap asin.
4. Tambahkan susu cair dan minyak wijen.
5. Masukkan mie lalu aduk hingga rata.
6. Tambahkan telur dan masak hingga matang.
7. Sajikan dengan daun bawang dan wijen.",
        ]);

        // 7. Ayam Geprek Sambal Matah
        Recipe::create([
            'user_id' => $admin->id,
            'title' => 'Ayam Geprek Sambal Matah',
            'slug' => Str::slug('Ayam Geprek Sambal Matah'),
            'ingredients' => "1 potong ayam crispy
5 buah cabai rawit
3 siung bawang merah
1 batang serai
2 lembar daun jeruk
1 buah jeruk limau
1 sdm minyak panas
Garam secukupnya
Nasi putih secukupnya",
            'steps' => "1. Iris tipis bawang merah, cabai, serai, dan daun jeruk.
2. Campurkan semua bahan sambal.
3. Tambahkan garam dan perasan jeruk limau.
4. Panaskan minyak lalu siram ke sambal.
5. Letakkan ayam crispy di atas sambal.
6. Geprek ayam hingga sedikit hancur.
7. Sajikan bersama nasi putih.",
        ]);
    }
}
