<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function(Blueprint $table){
            $table->id();
            $table->string('name', 255);
            $table->string('cnpj', 14)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('zipcode', 8);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
