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
            $table->text('short_description_en')->after('name_en')->change();
            $table->text('description_en')->after('short_description_en')->change();

            $table->text('short_description_ru')->after('name_ru')->change();
            $table->text('description_ru')->after('short_description_ru')->change();

            $table->text('short_description_tm')->after('name_tm')->change();
            $table->text('description_tm')->after('short_description_tm')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('short_description_en')->after('name_en')->change();
            $table->tstring('description_en')->after('short_description_en')->change();

            $table->string('short_description_ru')->after('name_ru')->change();
            $table->string('description_ru')->after('short_description_ru')->change();

            $table->string('short_description_tm')->after('name_tm')->change();
            $table->string('description_tm')->after('short_description_tm')->change();
        });
    }
};
