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
            $table->string('cnpj-cpf', 14);
            $table->string('zipcode', 8);
            $table->string('adress', 255);
            $table->string('number', 10);
            $table->string("district", 255);
            $table->string("city", 255);
            $table->string("state", 2);
            $table->json("emails");
            /* 
                "emails": [{
                    "contato": "Fulano de tal,
                    "email": "fulanodetal@empresa.com.br"
                }]
            */
            $table->array("phones");
            /*
            phones = [
                [
                    "phone" => '4733328676', 
                    "whatsApp" => true
                ], 
                [
                    "phone" => '4733328676', 
                    "whatsApp" => false
                ]
            ] 
            */
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
