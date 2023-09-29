<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi')->insert([
            'tanggal' => '2023-10-10',  // Format tanggal: YYYY-MM-DD
            'id_pelanggan' => 4,
            'total_harga' => 50000,
            'status' => true,
        ]);
    
        DB::table('transaksi')->insert([
            'tanggal' => '2023-11-11',
            'id_pelanggan' => 5,
            'total_harga' => 40000,
            'status' => true,
        ]);
    
        DB::table('transaksi')->insert([
            'tanggal' => '2023-12-12',
            'id_pelanggan' => 6,
            'total_harga' => 55000,
            'status' => false,
        ]);
    }
}    
