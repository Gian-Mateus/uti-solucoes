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
        Schema::create('inventory', function(Blueprint $table){
            $table->id();
            $table->string('name_micro');
            $table->string('type_os', 50);
            $table->string('cpu', 50);
            $table->interger('ram'); // 4, 8, 16, 32
            $table->string('memory', 50); // HD 500GB, SSD 250GB, NVME 500GB
            $table->string('sector', 50); //Almoxarifado, Administrativo, Financeiro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
