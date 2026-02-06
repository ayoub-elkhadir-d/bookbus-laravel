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
                'jour_depart' => '2026-02-18',
                'heure_depart' => '08:00:00',
                'heure_arrivee' => '10:30:00',
                'route_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
