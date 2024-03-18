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
        Schema::table('products', function (Blueprint $table) {
            $table->string('name_en')->after('description');
            $table->string('short_description_en')->after('name_en');
            $table->string('description_en')->after('short_description_en');

            $table->string('name_ru')->after('description_en');
            $table->string('short_description_ru')->after('name_ru');
            $table->string('description_ru')->after('short_description_ru');

            $table->string('name_tm')->after('description_ru');
            $table->string('short_description_tm')->after('name_tm');
            $table->string('description_tm')->after('short_description_tm');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name_en');
            $table->dropColumn('short_description_en');
            $table->dropColumn('description_en');

            $table->dropColumn('name_ru');
            $table->dropColumn('short_description_ru');
            $table->dropColumn('description_ru');

            $table->dropColumn('name_tm');
            $table->dropColumn('short_description_tm');
            $table->dropColumn('description_tm');
        });
    }
};
