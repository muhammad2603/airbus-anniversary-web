<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TypeUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "type" => Str::ascii("seats")
            ],
            [
                "type" => Str::ascii("km")
            ],
            [
                "type" => Str::ascii("lbf")
            ],
            [
                "type" => Str::ascii("m")
            ],
            [
                "type" => Str::ascii("kg")
            ],
            [
                "type" => Str::ascii("ft")
            ],
            [
                "type" => Str::ascii("litres")
            ],
            [
                "type" => Str::ascii("m (w/ Sharklets)")
            ],
            [
                "type" => Str::ascii("uplift")
            ],
        ];
        DB::table("type_units")->insert($data);
    }
}
