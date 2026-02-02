<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buses')->insert([
            [
                'matricule' => 'CAS-1234',
                'capacite' => 50,
                'statut' => 'active',
            ],
            [
                'matricule' => 'RAB-5678',
                'capacite' => 45,
                'statut' => 'active',
            ],
            [
                'matricule' => 'MKN-9012',
                'capacite' => 60,
                'statut' => 'inactive',
            ],
        ]);
    }
}
