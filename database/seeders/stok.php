<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stok extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stok')->insert([
        'jumlah_stok' => 200,
	    'minimum_stok' => 50,
	    'supplier' => 'purwokerto store',
        ]);
        DB::table('stok')->insert([
        'jumlah_stok' => 150,
	    'minimum_stok' => 50,
	    'supplier' => 'baturaden store',
        ]);
         DB::table('stok')->insert([
        'jumlah_stok' => 170,
	    'minimum_stok' => 50,
	    'supplier' => 'karangbawang store',
        ]);
        
        
    }
}
