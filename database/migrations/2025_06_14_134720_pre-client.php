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
        Schema::create('pre-client', function(Blueprint $table){
            $table->id();
            $table->string('name', 255);
            $table->string('cnpj', 14)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('email', 55)->nullable();
            $table->string('phone');
            $table->boolean('is_whats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre-client');
    }
};
