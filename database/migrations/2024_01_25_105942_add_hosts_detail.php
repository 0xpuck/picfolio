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
        //
        Schema::table('hosts', function (Blueprint $table) {
            /* Parent from users table */
            $table->string("detail");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('hosts', function (Blueprint $table) {
            /* Parent from users table */
            $table->removeColumn("detail");
        });
    }
};
