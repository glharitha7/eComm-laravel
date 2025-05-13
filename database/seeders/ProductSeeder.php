<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'description'=>'A smartphone with 8gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/81KH1T4WGGL.jpg'
            ],
             [
                'name'=>'Panasonic Tv',
                'price'=>'400',
                'description'=>'A smart tv with much more feature',
                'category'=>'tv',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl6GDGJ8fwLbcee5GKQJYEdC15WiJlC9gpHA&s'
            ],
             [
                'name'=>'Sony Tv',
                'price'=>'500',
                'description'=>'A smart tv with much more feature',
                'category'=>'tv',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSngx8DijyrZkNx-gco4dRQYJhw-QRNHuJoUQ&s'
            ],
             [
                'name'=>'LG Fridge',
                'price'=>'300',
                'description'=>'A fridge with much more feature',
                'category'=>'fridge',
                'gallery'=>'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRSXzgWvMy19fMtjDZy-2eaoOEt9CIIEEZHQf2HEemHcFXTzHD1mMgfUSUAmqbEx5GlP2dQh7SUUVTgBdM6xZdcPExcMXAVfuZDoVvSGVXClywlcoVLBt0dZfE'
            ]
        ]);
    }
}
