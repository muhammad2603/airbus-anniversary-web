<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["engine_name" => "CFM LEAP-1A", "founder" => "CFM International"],
            ["engine_name" => "PW1100G-JM", "founder" => "Pratt & Whitney"],
        ];
        DB::table("engines")->insert($data);
    }
}
