<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngineeringPillarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["code" => "SYS-01", "name" => "CFM LEAP & PW1100G Engines", "tag" => "Propulsion", "description" => "The A320neo family introduced a choice between two next-generation powerplants — the CFM International LEAP-1A and the Pratt & Whitney PW1100G-JM. Both deliver class-leading thrust efficiency and dramatically reduced noise footprints over predecessor variants."],
            ["code" => "SYS-02", "name" => "Wingtip Sharklets", "tag" => "Aerodynamics", "description" => "Blended Winglet Sharklets — up to 2.4 metres tall — reduce induced drag by optimising spanwise lift distribution. Each set of Sharklets contributes approximately 3.5% additional fuel burn reduction on top of new engine gains."],
            ["code" => "SYS-03", "name" => "Airspace Cabin", "tag" => "Passenger Experience", "description" => "The Airspace cabin architecture introduces wider pivoting overhead bins, broader aisles and optimised seat track spacing, cutting turnaround times while raising perceived spaciousness — without increasing fuselage diameter."],
        ];
        DB::table("engineering_pillars")->insert($data);
    }
}
