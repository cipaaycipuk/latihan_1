<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'nama' => 'Comfy Sofa',
            'kategori' => 'furniture',
            'price' => '12300000',
            'stok' => '123',
        ]);

        Products::create([
            'nama' => 'Retro Clocks',
            'kategori' => 'decoration',
            'price' => '2400000',
            'stok' => '145',
        ]);

        Products::create([
            'nama' => 'Jelly Lamp',
            'kategori' => 'lighting',
            'price' => '87900000',
            'stok' => '89',
        ]);
    }
}
