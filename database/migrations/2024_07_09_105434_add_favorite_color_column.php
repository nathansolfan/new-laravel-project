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
        // :: static function belongs to a class
        Schema::table('users', function ($table) {
            $table->string('favoriteColor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // opposite
        Schema::table('users', function ($table) {
            $table->dropColumn('favoriteColor');
        });
    }
};
