<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            "name"=> "LG MK600m(22 inch)",
            "price"=>"15500",
            "category"=>"smart monitor",
            "gallery"=>"https://www.startech.com.bd/lg-22mk600m-full-hd-monitor",
            "description"=>"Ultra silm with borderless screen."

        ]);
    }
}
