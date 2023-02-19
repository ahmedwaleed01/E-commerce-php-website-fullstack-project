<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class accessories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accessories')->insert([
            array('name'=>'Water-repellent backpack','filename'=>'Water-repellent backpack.png','price'=>'150'),
            array('name'=>'Pendant necklace','filename'=>'Pendant necklace.png','price'=>'100'),
            array('name'=>'Three-strand necklace','filename'=>'Three-strand necklace.png','price'=>'120'),
        ]);
    }
}
