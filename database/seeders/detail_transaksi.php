<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class detail_transaksi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('detail_transaksi')->insert([
        'id_produk' => 1,
        'id_transaksi' => 2,
	    'jumlah' => 2,
	    'harga_satuan' => 50000,
        ]);

        DB::table('detail_transaksi')->insert([
        'id_produk' => 2,
        'id_transaksi' => 3,
	    'jumlah' => 2,
	    'harga_satuan' => 60000,
        ]);

        DB::table('detail_transaksi')->insert([
        'id_produk' => 3,
        'id_transaksi' => 4,
	    'jumlah' => 3,
	    'harga_satuan' => 70000,
    ]);
    }
}
