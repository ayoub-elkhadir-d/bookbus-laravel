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
        $table->float('tarif'); //price
        $table->time('duree_estimee');
        $table->float('distance_km');
        $table->integer('nb_voyage');

        $table->foreignId('bus_id')
              ->constrained('buses')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('segments');
    }
};
