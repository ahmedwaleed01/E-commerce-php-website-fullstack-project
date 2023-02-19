<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Feetwear extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Feetwear')->insert([
            array('name'=>'Trainers','filename'=>'Trainers.png','price'=>'300'),
            array('name'=>'Derby shoes','filename'=>'Derby shoes.png','price'=>'450'),
            array('name'=>'Grey Slipper','filename'=>'Grey Slipper.png','price'=>'200'),
            array('name'=>'Half Sneeker orange shoes','filename'=>'Half Sneeker orange shoes.png','price'=>'230'),
            array('name'=>'Black slipper','filename'=>'Black slipper.png','price'=>'140'),
            array('name'=>'Pink shoes','filename'=>'Pink shoes.png','price'=>'320'),
        ]);
    }
}
