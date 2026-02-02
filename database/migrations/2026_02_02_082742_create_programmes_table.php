<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
    Schema::create('programmes', function (Blueprint $table) {
        $table->id();
        $table->string('matricule', 50);
        $table->integer('charge_max');
        $table->boolean('actif')->default(true);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
