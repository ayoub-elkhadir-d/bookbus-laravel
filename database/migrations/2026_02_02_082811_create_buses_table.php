<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
public function up()
{
    Schema::create('buses', function (Blueprint $table) {
        $table->id();
        $table->string('matricule', 50)->unique();
        $table->integer('capacite');
        $table->string('statut', 50);
    });
}



    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
