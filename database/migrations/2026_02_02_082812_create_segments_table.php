<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      
public function up()
{
    Schema::create('segments', function (Blueprint $table) {
        $table->id();
        $table->float('tarif'); 
        $table->string('departure_city');
        $table->string('arrival_city');
        $table->time('departure_time');
        $table->foreignId('id_route')
              ->constrained('routes')
              ->onDelete('cascade');

      

        $table->foreignId('bus_id')
              ->constrained('buses')
              ->onDelete('cascade');
    });
}


   
    public function down(): void
    {
        Schema::dropIfExists('segments');
    }
};
