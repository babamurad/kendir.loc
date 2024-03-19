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
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('title_en')->after('text');
            $table->text('text_en')->after('title_en');
            $table->string('title_ru')->after('text_en');
            $table->text('text_ru')->after('title_ru');
            $table->string('title_tm')->after('text_ru');
            $table->text('text_tm')->after('title_tm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('title_en');
            $table->dropColumn('text_en');
            $table->dropColumn('title_ru');
            $table->dropColumn('text_ru');
            $table->dropColumn('title_tm');
            $table->dropColumn('text_tm');
        });
    }
};
