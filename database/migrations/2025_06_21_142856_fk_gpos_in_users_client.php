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
        Schema::table('users_client', function (Blueprint $table) {
            //
            $table->foreignId('gpo_id')
                    ->references('id')
                    ->on('gpos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_client', function (Blueprint $table) {
            //
            $table->dropForeign(['gpo_id']);
            $table->dropColumn('gpo_id');
        });
    }
};
