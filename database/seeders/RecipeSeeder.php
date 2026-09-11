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

        $owners = [$admin, $user];

        $recipes = [
            [
                'title' => 'Nasi Goreng Spesial',
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
                'image' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Pasta Carbonara Creamy',
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
                'image' => 'https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Chicken Katsu Curry',
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
                'image' => 'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Beef Teriyaki Rice Bowl',
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
                'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Avocado Egg Toast',
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
                'image' => 'https://images.unsplash.com/photo-1541519227354-08fa5d50c44d?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Creamy Mie Chili Oil',
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
                'image' => 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Ayam Geprek Sambal Matah',
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
                'image' => 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Sushi Roll Salmon',
                'ingredients' => "2 mangkuk nasi sushi
150 gram salmon segar
2 lembar nori
1/2 buah timun
1/2 buah alpukat
2 sdm mayones
Kecap asin secukupnya
Wasabi secukupnya",
                'steps' => "1. Ratakan nasi sushi di atas nori.
2. Susun salmon, timun, dan alpukat di tengah.
3. Gulung dengan bantuan makisu hingga padat.
4. Potong gulungan jadi beberapa bagian.
5. Sajikan dengan kecap asin dan wasabi.",
                'image' => 'https://images.unsplash.com/photo-1553621042-f6e147245754?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Pizza Margherita',
                'ingredients' => "1 buah kulit pizza
100 ml saus tomat
150 gram keju mozarella
Daun basil secukupnya
2 sdm minyak zaitun
Garam secukupnya",
                'steps' => "1. Oleskan saus tomat ke seluruh kulit pizza.
2. Taburkan keju mozarella secara merata.
3. Panggang di oven hingga keju meleleh dan pinggiran renyah.
4. Taburkan daun basil segar.
5. Siram sedikit minyak zaitun lalu sajikan.",
                'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Ramen Pedas',
                'ingredients' => "1 bungkus mie ramen
2 sdm pasta cabai
500 ml kaldu ayam
1 butir telur rebus
Daun bawang secukupnya
Nori secukupnya
Jagung manis secukupnya",
                'steps' => "1. Rebus mie ramen hingga matang, tiriskan.
2. Panaskan kaldu ayam bersama pasta cabai.
3. Tuang kaldu ke atas mie.
4. Tata telur rebus, nori, jagung, dan daun bawang.
5. Sajikan selagi panas.",
                'image' => 'https://images.unsplash.com/photo-1591814468924-caf88d1232e1?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Salad Buah Segar',
                'ingredients' => "1 buah apel
1 buah pir
100 gram anggur
100 gram melon
2 sdm yogurt plain
1 sdm madu",
                'steps' => "1. Potong semua buah menjadi ukuran dadu.
2. Campurkan semua buah dalam mangkuk besar.
3. Aduk yogurt dan madu jadi satu.
4. Siram campuran yogurt ke atas buah.
5. Aduk rata lalu sajikan dingin.",
                'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Steak Panggang Saus Lada',
                'ingredients' => "200 gram daging has dalam
2 sdm mentega
1 sdm lada hitam butir
100 ml krim masak
Garam secukupnya
Kentang goreng secukupnya",
                'steps' => "1. Bumbui daging dengan garam dan lada.
2. Panggang daging di teflon panas hingga matang sesuai selera.
3. Angkat daging, sisihkan.
4. Tumis lada hitam dengan mentega, tuang krim masak.
5. Siram saus ke atas steak.
6. Sajikan bersama kentang goreng.",
                'image' => 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092?w=800&q=80&auto=format&fit=crop',
            ],
            [
                'title' => 'Pancake Madu',
                'ingredients' => "200 gram tepung terigu
2 butir telur
250 ml susu cair
1 sdm gula pasir
1 sdt baking powder
Madu secukupnya
Mentega secukupnya",
                'steps' => "1. Campurkan tepung, gula, dan baking powder.
2. Tambahkan telur dan susu, aduk hingga rata.
3. Panaskan teflon dengan sedikit mentega.
4. Tuang adonan, masak hingga muncul gelembung lalu balik.
5. Susun pancake, siram madu di atasnya.",
                'image' => 'https://images.unsplash.com/photo-1528207776546-365bb710ee93?w=800&q=80&auto=format&fit=crop',
            ],
        ];

        foreach ($recipes as $index => $data) {
            $owner = $owners[$index % count($owners)];

            Recipe::updateOrCreate(
                ['slug' => Str::slug($data['title'])],
                [
                    'user_id' => $owner->id,
                    'title' => $data['title'],
                    'ingredients' => $data['ingredients'],
                    'steps' => $data['steps'],
                    'image' => $data['image'],
                ]
            );
        }
    }
}
