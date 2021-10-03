<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                [
                'name'=>'Laptop',
                'price'=>'55000',
                'category'=>'Laptop',
                'gallery'=>'image/laptop-1.jpg',
                'description'=>'A Laptop 4gb ram and much more features'
                ],

                [
                'name'=>'Computer',
                'price'=>'35000',
                'category'=>'Computer',
                'gallery'=>'image/computer-2.jpg',
                'description'=>'A Computer 4gb ram and much more features'
                ],

                [
                'name'=>'LED TV',
                'price'=>'22000',
                'category'=>'LED TV',
                'gallery'=>'image/LED-tv-1.jpg',
                'description'=>'A LED TV HD resolution and much more features'
                ],

                [
                'name'=>'Refrigerator',
                'price'=>'45000',
                'category'=>'Refrigerator',
                'gallery'=>'image/Freez-1.jpg',
                'description'=>'A Refrigerator 8 Stack and much more features'
                ],

                [
                'name'=>'Mic',
                'price'=>'17000',
                'category'=>'Mic',
                'gallery'=>'image/Mic-1.jpg',
                'description'=>'A Mic Good sound and much more features'
                ],

                [
                'name'=>'Box Tv',
                'price'=>'13000',
                'category'=>'Box Tv',
                'gallery'=>'image/oldTv-1.jpg',
                'description'=>'A Box Tv HD resolution and much more features'
                ],

                [
                'name'=>'Sound Box',
                'price'=>'29000',
                'category'=>'Sound Box',
                'gallery'=>'image/soundbox-1.jpg',
                'description'=>'A Sound Box Good sound and much more features'
                ]
            ]
        );
    }
}
