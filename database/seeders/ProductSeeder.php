<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

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
                'category'=>'mobile',
                'description'=>'A smartphone with 8gb ram and much more feature',
                'gallery'=>'https://www.gadgetsnow.com/mobile-phones/images/Oppo-A13-photos',
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'400',
                'category'=>'TV',
                'description'=>'A smart tv with 8gb much more feature',
                'gallery'=>'https://static.fnac-static.com/multimedia/Images/FR/MDM/6a/b0/24/19181674/1540-1/tsp20220524030415/TV-Panasonic-TX-32LS490E-32-Full-HD-Android-TV-Noir.jpg',
            ],
            [
                'name'=>'Sony TV',
                'price'=>'500',
                'category'=>'TV',
                'description'=>'A tv with much more feature',
                'gallery'=>'https://m.media-amazon.com/images/I/81gvQXs0CML._AC_SX466_.jpg',
            ],
            [
                'name'=>'LG fridge',
                'price'=>'200',
                'category'=>'Fridge',
                'description'=>'A fridge with much more feature',
                'gallery'=>'https://www.lg.com/us/images/refrigerators/md05763787/gallery/medium01.jpg',
            ],

        ]);
    }
}
