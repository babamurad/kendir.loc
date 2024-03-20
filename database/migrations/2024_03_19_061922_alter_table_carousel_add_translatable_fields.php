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
        Schema::table('carousels', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('text');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_tm');
            $table->string('text_en');
            $table->string('text_ru');
            $table->string('text_tm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->string('title');
            $table->string('text');
            $table->dropColumn('title_en');
            $table->dropColumn('title_ru');
            $table->dropColumn('title_tm');
            $table->dropColumn('text_en');
            $table->dropColumn('text_ru');
            $table->dropColumn('text_tm');
        });
    }
};
