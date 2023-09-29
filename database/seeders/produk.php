<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            'nama' => 'udin',
            'deskripsi' => 'baju lengan panjang',
            'harga' => 70000, // Sesuaikan dengan tipe data kolom 'harga'
            'kategori' => 'outer',
        ]);
        DB::table('produk')->insert([
            'nama' => 'bani',
            'deskripsi' => 'baju lengan pendek',
            'harga' => 50000, // Sesuaikan dengan tipe data kolom 'harga'
            'kategori' => 'outer',
        ]);
        DB::table('produk')->insert([
            'nama' => 'ujang',
            'deskripsi' => 'baju lengan setengah',
            'harga' => 30000, // Sesuaikan dengan tipe data kolom 'harga'
            'kategori' => 'outer',
        ]);
    }
}