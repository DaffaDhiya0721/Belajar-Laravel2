<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArtikelSeeder::class,
            KategoriSeeder::class,
        ]);
    }
}
