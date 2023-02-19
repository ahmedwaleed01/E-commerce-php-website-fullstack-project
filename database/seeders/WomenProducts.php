<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WomenProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('womenproduct')->insert([
            array('name'=>'White Blouse','filename'=>'Layer 5.png','price'=>'150'),
            array('name'=>'Yellow Blouse','filename'=>'image (1).png','price'=>'100'),
            array('name'=>'Blue Blouse','filename'=>'image (2).png','price'=>'120'),
            array('name'=>'Colored Blouse','filename'=>'imgg.png','price'=>'90'),
            array('name'=>'Black Dress','filename'=>'Layer 10.png','price'=>'200'),
            array('name'=>'Blue-white Blouse','filename'=>'Layer 9.png','price'=>'100'),
            array('name'=>'sweatshirt','filename'=>'sweatshirt.png','price'=>'100'),
            array('name'=>'Printed Sweatshirt','filename'=>'Printed sweatshirt.png','price'=>'70'),
        ]);
    }
}
