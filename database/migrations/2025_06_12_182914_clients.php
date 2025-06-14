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
        Schema::create('clients', function(Blueprint $table){
            $table->id();
            $table->string('name', 255);
            $table->string('cnpj', 14)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('zipcode', 8);
            $table->string('adress', 255);
            $table->string('number', 10);
            $table->string("district", 255);
            $table->string("city", 255);
            $table->string("state", 2);
            $table->string("email", 255);
            $table->string("phone");
            $table->boolean('is_whats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
