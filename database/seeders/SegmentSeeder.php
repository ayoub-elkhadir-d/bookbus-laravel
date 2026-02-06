<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facade\DB;

class SegmentSeeder extends Seeder
{

   
        public function run(): void
    {
       
        DB::table('segments')->insert([
               ['tarif'=>50, 'departure_city'=>'Casablanca', 'arrival_city'=>'Mohammedia', 'departure_time'=>'08:00:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>70, 'departure_city'=>'Casablanca', 'arrival_city'=>'Rabat', 'departure_time'=>'08:30:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>90, 'departure_city'=>'Casablanca', 'arrival_city'=>'Kenitra', 'departure_time'=>'09:00:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>110, 'departure_city'=>'Casablanca', 'arrival_city'=>'Ben Slimane', 'departure_time'=>'09:30:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>150, 'departure_city'=>'Casablanca', 'arrival_city'=>'Fes', 'departure_time'=>'10:00:00', 'id_route'=>1, 'bus_id'=>1],
               ['tarif'=>50, 'departure_city'=>'Mohammedia', 'arrival_city'=>'Casablanca', 'departure_time'=>'08:15:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>40, 'departure_city'=>'Mohammedia', 'arrival_city'=>'Rabat', 'departure_time'=>'08:45:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>80, 'departure_city'=>'Mohammedia', 'arrival_city'=>'Kenitra', 'departure_time'=>'09:15:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>100, 'departure_city'=>'Mohammedia', 'arrival_city'=>'Ben Slimane', 'departure_time'=>'09:45:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>140, 'departure_city'=>'Mohammedia', 'arrival_city'=>'Fes', 'departure_time'=>'10:15:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>70, 'departure_city'=>'Rabat', 'arrival_city'=>'Casablanca', 'departure_time'=>'08:30:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>40, 'departure_city'=>'Rabat', 'arrival_city'=>'Mohammedia', 'departure_time'=>'09:00:00', 'id_route'=>1, 'bus_id'=>1],
               ['tarif'=>60, 'departure_city'=>'Rabat', 'arrival_city'=>'Kenitra', 'departure_time'=>'09:30:00', 'id_route'=>1, 'bus_id'=>1],
               ['tarif'=>90, 'departure_city'=>'Rabat', 'arrival_city'=>'Ben Slimane', 'departure_time'=>'10:00:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>130, 'departure_city'=>'Rabat', 'arrival_city'=>'Fes', 'departure_time'=>'10:30:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>90, 'departure_city'=>'Kenitra', 'arrival_city'=>'Casablanca', 'departure_time'=>'08:45:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>80, 'departure_city'=>'Kenitra', 'arrival_city'=>'Mohammedia', 'departure_time'=>'09:15:00', 'id_route'=>1, 'bus_id'=>1],
               ['tarif'=>60, 'departure_city'=>'Kenitra', 'arrival_city'=>'Rabat', 'departure_time'=>'09:45:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>100, 'departure_city'=>'Kenitra', 'arrival_city'=>'Ben Slimane', 'departure_time'=>'10:15:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>140, 'departure_city'=>'Kenitra', 'arrival_city'=>'Fes', 'departure_time'=>'10:45:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>110, 'departure_city'=>'Ben Slimane', 'arrival_city'=>'Casablanca', 'departure_time'=>'09:00:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>100, 'departure_city'=>'Ben Slimane', 'arrival_city'=>'Mohammedia', 'departure_time'=>'09:30:00', 'id_route'=>1, 'bus_id'=>1],
               ['tarif'=>90, 'departure_city'=>'Ben Slimane', 'arrival_city'=>'Rabat', 'departure_time'=>'10:00:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>70, 'departure_city'=>'Ben Slimane', 'arrival_city'=>'Kenitra', 'departure_time'=>'10:30:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>120, 'departure_city'=>'Ben Slimane', 'arrival_city'=>'Fes', 'departure_time'=>'11:00:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>150, 'departure_city'=>'Fes', 'arrival_city'=>'Casablanca', 'departure_time'=>'09:15:00', 'id_route'=>1, 'bus_id'=>1],
             ['tarif'=>140, 'departure_city'=>'Fes', 'arrival_city'=>'Mohammedia', 'departure_time'=>'09:45:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>130, 'departure_city'=>'Fes', 'arrival_city'=>'Rabat', 'departure_time'=>'10:15:00', 'id_route'=>1, 'bus_id'=>1],
            ['tarif'=>120, 'departure_city'=>'Fes', 'arrival_city'=>'Kenitra', 'departure_time'=>'10:45:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>110, 'departure_city'=>'Fes', 'arrival_city'=>'Ben Slimane', 'departure_time'=>'11:15:00', 'id_route'=>1, 'bus_id'=>1],
              ['tarif'=>110, 'departure_city'=>'Fes', 'arrival_city'=>'Ben Slimane', 'departure_time'=>'11:15:00', 'id_route'=>1, 'bus_id'=>1],
            ]);

    }
}
