<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "Delhi, Mumbai"],
            ["name" => "Kuala Lumpur"],
            ["name" => "Manila"],
            ["name" => "Mumbai"],
            ["name" => "Ho Chi Minh City"],
            ["name" => "Singapore Changi"],
            ["name" => "Dublin, London Stansted"],
            ["name" => "Budapest, Warsaw"],
            ["name" => "London Gatwick"],
            ["name" => "Barcelona El Prat"],
            ["name" => "Düsseldorf, Cologne"],
            ["name" => "Amsterdam Schiphol"],
            ["name" => "Dallas/Fort Worth"],
            ["name" => "Chicago O'Hare"],
            ["name" => "New York JFK"],
            ["name" => "Bogotá El Dorado"],
            ["name" => "Dubai International"],
            ["name" => "Sharjah"],
        ];
        DB::table("cities")->insert($data);
    }
}
