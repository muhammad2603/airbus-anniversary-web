<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnvironmentalPerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["code" => "ACU-N4", "label" => "Noise Certification", "value" => "ICAO Stage 4"],
            ["code" => "ENV-NOX", "label" => "NOx vs CAEP/6", "value" => "-50%"],
            ["code" => "ACU-DB", "label" => "vs A320ceo", "value" => "-14dB"]
        ];
        DB::table("environmental_performances")->insert($data);
    }
}
