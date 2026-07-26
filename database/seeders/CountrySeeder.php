<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => "India", "code" => "IN"],
            ["name" => "Ireland", "code" => "IE"],
            ["name" => "Hungary", "code" => "HU"],
            ["name" => "United Kingdom", "code" => "GB"],
        ];
        DB::table("countries")->insert($data);
    }
}
