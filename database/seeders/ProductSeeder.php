<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Produk 1',
                'type' => 'Elektronik',
                'description' => 'Deskripsi untuk Produk 1',
                'selling_price' => 1000000.00,
                'purchase_price' => 800000.00,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produk 2',
                'type' => 'Pakaian',
                'description' => 'Deskripsi untuk Produk 2',
                'selling_price' => 200000.00,
                'purchase_price' => 150000.00,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produk 3',
                'type' => 'Peralatan Rumah Tangga',
                'description' => 'Deskripsi untuk Produk 3',
                'selling_price' => 300000.00,
                'purchase_price' => 250000.00,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
