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
        Schema::create('servers', function(Blueprint $table){
            $table->id();
            $table->string('name'); // SERVER-AD
            $table->string('domain', 50);
            $table->string('netbios', 50); // SERVER-AD
            $table->string('os', 50);
            $table->string('ip_address', 50);
            $table->string('gateway', 50);
            $table->string('dns', 50);
            $table->string('hostname', 50); // SERVER-AD.EMPRESA.LOCAL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
