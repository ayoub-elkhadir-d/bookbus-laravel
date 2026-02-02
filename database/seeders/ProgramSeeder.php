<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('programes')->insert([
            [
                'jour_depart' => 'Monday',
                'heure_depart' => '08:00:00',
                'heure_arrivee' => '10:30:00',
                'route_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jour_depart' => 'Tuesday',
                'heure_depart' => '14:00:00',
                'heure_arrivee' => '16:15:00',
                'route_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jour_depart' => 'Friday',
                'heure_depart' => '18:30:00',
                'heure_arrivee' => '21:00:00',
                'route_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
