<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GlobeSeeder::class,
            CitySeeder::class,
            TypeUnitSeeder::class,
            SpecificationSeeder::class,
            EngineSeeder::class,
            EngineSpecSeeder::class,
            EngineeringPillarSeeder::class,
            CountrySeeder::class,
            AirlineSeeder::class,
            GlobalOperatorSeeder::class,
            EnvironmentalPerformanceSeeder::class,
            HistorySeeder::class,
        ]);
    }
}
