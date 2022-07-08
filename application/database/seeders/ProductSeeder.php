<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table product is empty
        if(DB::table('products')->count() == 0){

            DB::table('products')->insert([

                [
                    'id' => 1,
                    'name' => 'Apple Watch Series 3 Aluminium',
                    'price' => 55000,
                    'description' => 'All Apple Watch models feature Bluetooth and Wi-Fi. Apple Watch Series 3 (GPS) also features built-in GPS that works independently of your iPhone for distance, pace, and route mapping in workouts. Apple Watch Series 3 (GPS) requires an iPhone 6s or later with iOS 13 or later.',
                    'avatar_name' => 'apple-watch.jpg',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                    'status' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'name' => 'Beats Solo 3 Wireless',
                    'price' => 15900,
                    'description' => 'All Apple Watch models feature Bluetooth and Wi-Fi. Apple Watch Series 3 (GPS) also features built-in GPS that works independently of your iPhone for distance, pace, and route mapping in workouts. Apple Watch Series 3 (GPS) requires an iPhone 6s or later with iOS 13 or later.',
                    'avatar_name' => 'beat.jpg',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                    'status' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'name' => 'Apple iMac',
                    'price' => 169900,
                    'description' => 'All Apple Watch models feature Bluetooth and Wi-Fi. Apple Watch Series 3 (GPS) also features built-in GPS that works independently of your iPhone for distance, pace, and route mapping in workouts. Apple Watch Series 3 (GPS) requires an iPhone 6s or later with iOS 13 or later.',
                    'avatar_name' => 'imac.jpg',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                    'status' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'name' => 'Apple iPad',
                    'price' => 41599,
                    'description' => 'All Apple Watch models feature Bluetooth and Wi-Fi. Apple Watch Series 3 (GPS) also features built-in GPS that works independently of your iPhone for distance, pace, and route mapping in workouts. Apple Watch Series 3 (GPS) requires an iPhone 6s or later with iOS 13 or later.',
                    'avatar_name' => 'ipad.jpg',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                    'status' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 5,
                    'name' => 'Apple iPhone X',
                    'price' => 134200,
                    'description' => 'All Apple Watch models feature Bluetooth and Wi-Fi. Apple Watch Series 3 (GPS) also features built-in GPS that works independently of your iPhone for distance, pace, and route mapping in workouts. Apple Watch Series 3 (GPS) requires an iPhone 6s or later with iOS 13 or later.',
                    'avatar_name' => 'iphone.jpg',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                    'status' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 6,
                    'name' => 'Apple MacBook',
                    'price' => 269900,
                    'description' => 'All Apple Watch models feature Bluetooth and Wi-Fi. Apple Watch Series 3 (GPS) also features built-in GPS that works independently of your iPhone for distance, pace, and route mapping in workouts. Apple Watch Series 3 (GPS) requires an iPhone 6s or later with iOS 13 or later.',
                    'avatar_name' => 'macbook.jpg',
                    'created_by' => 'admin',
                    'updated_by' => 'admin',
                    'status' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);

        } else { echo "\e[Product Table is not empty, therefore NOT "; }
    }
}
