<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlobalOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["airline_id" => 1, "orders_count" => 310, "operating_since" => "2014-05-30"],
            ["airline_id" => 2, "orders_count" => 210, "operating_since" => "2017-01-01"],
            ["airline_id" => 3, "orders_count" => 180, "operating_since" => "2019-08-02"],
            ["airline_id" => 4, "orders_count" => 150, "operating_since" => "2010-03-15"],
        ];
        DB::table("global_operators")->insert($data);
    }
}
