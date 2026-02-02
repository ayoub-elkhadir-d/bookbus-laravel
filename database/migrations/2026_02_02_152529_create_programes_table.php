<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
    Schema::create('programes', function (Blueprint $table) {
       $table->id();
        $table->string('jour_depart');
        $table->time('heure_depart');
        $table->time('heure_arrivee');

      
        $table->foreignId('route_id')->constrained('routes', 'trajet_id')->onDelete('cascade');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programes');
    }
};
