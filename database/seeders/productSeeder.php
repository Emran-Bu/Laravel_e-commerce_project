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
                'name'=>'Xiaomi Mobile',
                'price'=>'15000',
                'category'=>'Mobile',
                'gallery'=>'',
                'description'=>'a smartphone 4gb ram and much more features',
            ]
        );
    }
}
