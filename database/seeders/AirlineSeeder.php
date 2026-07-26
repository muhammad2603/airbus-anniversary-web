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
            ["name" => "IndiGo", "country_id" => 1],
            ["name" => "Ryanair", "country_id" => 2],
            ["name" => "Wizz Air", "country_id" => 3],
            ["name" => "EasyJet", "country_id" => 4],
        ];
        DB::table("airlines")->insert($data);
    }
}
