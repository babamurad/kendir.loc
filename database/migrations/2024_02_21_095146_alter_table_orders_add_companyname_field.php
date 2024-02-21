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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('companyname')->nullable()->after('zipcode');
            $table->string('addinfo')->after('zipcode');
            $table->date('delivered_date')->nullable();
            $table->date('canceled_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('companyname');
            $table->dropColumn('addinfo');
            $table->dropColumn('delivered_date');
            $table->dropColumn('canceled_date');
        });
    }
};
