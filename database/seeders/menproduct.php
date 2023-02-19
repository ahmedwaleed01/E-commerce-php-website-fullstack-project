<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menproduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menproduct')->insert([
            array('name'=>'Relaxed Fit Polo shirt','filename'=>'Relaxed Fit Polo shirt.png','price'=>'200'),
            array('name'=>'Sweatshirt','filename'=>'Sweatshirt1.JPG','price'=>'120'),
            array('name'=>'Relaxed Fit Sweatshirt','filename'=>'Relaxed Fit Sweatshirt.png','price'=>'210'),
            array('name'=>'Oversized Fit Hoodie','filename'=>'Oversized Fit Hoodie.png','price'=>'220'),
            array('name'=>'Printed Hoodie','filename'=>'Printed Hoodie.png','price'=>'1800'),
            array('name'=>'Relaxed Fit Hoodie','filename'=>'Relaxed Fit Hoodie1.png','price'=>'170'),
            array('name'=>'Relaxed Fit Sports hoodie','filename'=>'Relaxed Fit Sports hoodie.png','price'=>'120'),
            array('name'=>'Relaxed Fit Printed polo shirt','filename'=>'Relaxed Fit Printed polo shirt.png','price'=>'100'),
        ]);
    }
}
