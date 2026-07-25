<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["code" => "PSR", "label" => "Passengers (typical)", "value" => "165 / 194", "type" => 1],
            ["code" => "CRS", "label" => "Cruise Speed", "value" => "Mach 0.78", "type" => NULL],
            ["code" => "RNG", "label" => "Max Range", "value" => "6,300", "type" => 2],
            ["code" => "THR", "label" => "Engine Thrust", "value" => "22,000-27,000", "type" => 3],
            ["code" => "LEN", "label" => "Length", "value" => "37.57", "type" => 4],
            ["code" => "HGT", "label" => "Height", "value" => "11.76", "type" => 4],
            ["code" => "MTOW", "label" => "Max Takeoff Weight", "value" => "79,000", "type" => 5],
            ["code" => "SRV-CEIL", "label" => "Service Ceiling", "value" => "39,800", "type" => 6],
            ["code" => "FUEL-CPC", "label" => "Fuel Capacity", "value" => "26,730", "type" => 7],
            ["code" => "WNG-SPN", "label" => "Wingspan", "value" => "35.8", "type" => 8],
            ["code" => "FSL-DMT", "label" => "Fuselage Diameter", "value" => "3.95", "type" => 4],
            ["code" => "MTOW-INC", "label" => "MTOW Increase vs CEO", "value" => "+14%", "type" => 9],
        ];
        DB::table("specifications")->insert($data);
    }
}
