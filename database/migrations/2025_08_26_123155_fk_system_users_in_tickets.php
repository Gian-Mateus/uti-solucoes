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
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreignId('responsibleUser')
                    ->references('id')
                    ->on('system_users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')
                    ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('system_users', function (Blueprint $table) {
            $table->dropForeign(['tickets_id']);
            $table->dropColumn('tickets_id');
        });
    }
};
