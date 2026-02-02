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
                'duree_estimee' => '02:30:00',
                'distance_km' => 120.5,
                'nb_voyage' => 5,
                'bus_id' => 1,
            ],
            [
                'tarif' => 35.0,
                'duree_estimee' => '01:45:00',
                'distance_km' => 80.0,
                'nb_voyage' => 3,
                'bus_id' => 2,
            ],
            [
                'tarif' => 75.0,
                'duree_estimee' => '03:00:00',
                'distance_km' => 200.2,
                'nb_voyage' => 7,
                'bus_id' => 3,
            ],
        ]);
    }
}
