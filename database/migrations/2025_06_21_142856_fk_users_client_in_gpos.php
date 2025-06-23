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
        Schema::table('gpos', function (Blueprint $table) {
            //
            $table->foreignId('user_client_id')
                    ->references('id')
                    ->on('users_client')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gpos', function (Blueprint $table) {
            //
            $table->dropForeign(['user_client_id']);
            $table->dropColumn('user_client_id');
        });
    }
};
