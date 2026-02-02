<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentSeeder extends Seeder
{

   
        public function run(): void
    {
        DB::table('segments')->insert([
            [
                'tarif' => 50.0, 
                'departure_city' => 'Taza',
                'arrival_city' => 'Fes',
                'departure_time' => '01:45:00',
                'id_route' => 1,
                'bus_id' => 1,
            ], [
                'tarif' => 90.0, 
                'departure_city' => 'Rabat',
                'arrival_city' => 'Ben Slimane',
                'departure_time' => '01:45:00',
                'id_route' => 1,
                'bus_id' => 1,
            ],[
                'tarif' => 120.0, 
                'departure_city' => 'Sale',
                'arrival_city' => 'Fes',
                'departure_time' => '01:45:00',
                'id_route' => 1,
                'bus_id' => 1,
            ],[
                'tarif' => 270.0, 
                'departure_city' => 'Sale',
                'arrival_city' => 'Taza',
                'departure_time' => '01:45:00',
                'id_route' => 1,
                'bus_id' => 1,
            ],

        ]);
    }
}
