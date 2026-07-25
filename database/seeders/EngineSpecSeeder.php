<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngineSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["thrust" => "22,000-32,900 lbf", "bypass_ratio" => "11:1", "dry_weight" => "3,006 kg", "engine_id" => 1],
            ["thrust" => "22,000-33,000 lbf", "bypass_ratio" => "12:1", "dry_weight" => "2,858 kg", "engine_id" => 2]
        ];
        DB::table("engine_specs")->insert($data);
    }
}
