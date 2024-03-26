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
        Schema::table('specifications', function (Blueprint $table) {
            $table->smallInteger('diameter')->nullable()->comment('диаметр');
            $table->Integer('meter_int')->nullable()->comment('метров в тонне');
            $table->string('reinforcement_class')->nullable()->comment('класс арматуры, швеллера и т.д.');
            $table->string('articles')->nullable()->comment('статьи, сфера использования');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('specifications', function (Blueprint $table) {
            $table->dropColumn('dept');
            $table->dropColumn('diameter');
            $table->dropColumn('meter_int');
            $table->dropColumn('reinforcement_class');
            $table->dropColumn('articles');
        });
    }
};
