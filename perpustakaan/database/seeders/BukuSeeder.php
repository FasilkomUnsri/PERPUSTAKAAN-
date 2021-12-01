<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'geez',
            'slug' => Str::slug('geez'),
            'sampul' => 'geez.jpeg',
            'penulis' => 'rintik sedu', 
            'penerbit_id' => 1,
            'kategori_id' => 1, 
            'rak_id' => 1, 
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'dear nathan',
            'slug' => Str::slug('dear nathan'),
            'sampul' => 'dear nathan.jpeg',
            'penulis' => 'erisca febriani', 
            'penerbit_id' => 1,
            'kategori_id' => 1, 
            'rak_id' => 1, 
            'stok' => 10
        ]);
    }
}
