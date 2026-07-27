<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "IndiGo", "thumbnail" => "indigo-commercial-in-flight.avif", "country_id" => 1, "city_id" => 1, "globe_id" => 1],
            ["name" => "Ryanair", "thumbnail" => "ryanair-commercial-in-flight.avif", "country_id" => 2, "city_id" => 7, "globe_id" => 2],
            ["name" => "Wizz Air", "thumbnail" => "wizzair-commercial-in-flight.avif", "country_id" => 3, "city_id" => 8, "globe_id" => 2],
            ["name" => "EasyJet", "thumbnail" => "easyjet-commercial-in-flight.avif", "country_id" => 4, "city_id" => 9, "globe_id" => 2],
        ];
        DB::table("airlines")->insert($data);
    }
}
