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
        Schema::table('manufacturers', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('name_tm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('manufacturers', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('name_en');
            $table->dropColumn('name_ru');
            $table->dropColumn('name_tm');
        });
    }
};
