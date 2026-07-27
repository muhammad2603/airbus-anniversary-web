<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name" => 'Asia-Pacific'],
            ["name" => 'Europe'],
            ["name" => 'Americas'],
            ["name" => 'Middle East & Africa'],
        ];
        DB::table("globes")->insert($data);
    }
}
