<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["title" => "A320neo programme launched at Farnborough Airshow", "description" => "Launch customer: International Airlines Group", "on_date" => "2010-12-01"],
            ["title" => "First engine run of CFM LEAP-1A at Villaroche", "description" => "Ground test milestone", "on_date" => "2013-09-04"],
            ["title" => "First flight of A320neo prototype (MSN6101)", "description" => "Toulouse-Blagnac", "on_date" => "2014-09-25"],
            ["title" => "Type certification granted by EASA", "description" => "Entry into service with IndiGo", "on_date" => "2016-05-31"],
            ["title" => "A321neo receives certification", "description" => "Extended fuselage variant enters service", "on_date" => "2017-03-01"],
            ["title" => "5,000th A320 Family order milestone", "description" => "Programme backlog at record levels", "on_date" => "2018-01-15"],
            ["title" => "A321XLR programme launched at Paris Airshow", "description" => "Ultra-long-range single-aisle evolution", "on_date" => "2020-01-01"],
            ["title" => "A320neo family celebrates 10 years since first flight", "description" => "Over 5,100 aircraft in service worldwide", "on_date" => "2024-09-25"],
        ];
        DB::table("histories")->insert($data);
    }
}
