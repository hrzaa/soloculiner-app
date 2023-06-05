<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\User;
use App\Models\Resto;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'adminn',
            'email' => 'adminn@gmail.com',
            'password' => bcrypt('12345678'),
            'roles' => 'ADMIN'
        ]);

        Category::create([
            'name' => 'Minuman',
            'slug' => Str::slug('Minuman'),
            'photo' => Storage::disk('public')->put('assets/category', public_path('vendor/img/default.png'))
        ]);

        Food::create([
            'food_name' => 'Es Dawet',
            'users_id' => '1', 
            'food_history'=> 'Dawet berasal dari Desa Jabung, Ponorogo tanpa warna atau bening, tercatat dalam prasasti Taji Ponorogo pada abad 10. kemudian mulai dikenal kembali pada abad 15 pada zaman bupati Ponorogo Bathoro Katong, karena bermanfaat menyembuhkan orang sakit. Pada kala itu Warok Suro menggolo kembali pulih setelah luka melakukan perang, Kemudian Bathoro Katong memperkenalkan Dawet Jabung kepada kakanya Raden Fatah di Kesultanan Demak, Seketika Raden Fatah pun suka dengan minuman Dawet dan ingin menjadikan sebagai minuman keseharian di keraton Kesultanan Demak, kemudian dawet jabung yang berwarna bening diberi warna hijau, yang merupakan warna favorit Rasulallah Saw, Dawet yang berwarna hijau ini menyebar ke barbagai kota di Jawa Tengah.',
            'food_desc'=> 'Dawet merupakan minuman khas Jawa dari desa Jabung, Ponorogo yang terbuat dari tepung beras ataupun tepung beras ketan, disajikan dengan es parut serta gula merah cair dan santan. Rasa minuman ini manis dan gurih.',
            'categories_id'=> '1',
            'slug'=> Str::slug('Es Dawet'),
        ]);

        Resto::create([
            'resto_name' => 'Dawet Telasih Bu Dermi, Pasar Gede',
            'users_id' => '1', 
            'food_id' => '1', 
            'price' => '10000',
            'address' => 'Pasar Gede Hardjonagoro, Lapak Galabo (Gladag Langen Bogan), Jl. Jend. Urip Sumoharjo, Kota Surakarta', 
            'longitude' => '-7.569443318634531', 
            'latitude' => '110.8317061408925', 
            'slug' => Str::slug('Dawet Telasih Bu Dermi, Pasar Gede'),
        ]);
    }
}
