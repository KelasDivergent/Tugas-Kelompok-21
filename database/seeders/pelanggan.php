<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class pelanggan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pelanggan')->insert([
        'nama' => 'udin',
        'alamat' => 'purwokerto',
	    'nomor' => 123456,
	    'email' => 'udin@gmail.com',
        ]);

     DB::table('pelanggan')->insert([
        'nama' => 'bani',
        'alamat' => 'pasar manis',
	    'nomor' => 5678911,
	    'email' => 'bani@gmail.com',
        ]);

        DB::table('pelanggan')->insert([
            'nama' => 'Ujang',
            'alamat' => 'baturaden',
	        'nomor' => 12131415,
	        'email' => 'ujang@gmail.com',
        ]);

    }
}
