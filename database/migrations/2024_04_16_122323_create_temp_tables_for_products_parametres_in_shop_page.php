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
        DB::statement('
            CREATE TABLE kendirloc.category_temp (
              id int NOT NULL AUTO_INCREMENT,
              category_id int NOT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB,
            CHARACTER SET utf8mb4,
            COLLATE utf8mb4_0900_ai_ci;
        ');
        DB::statement('CREATE TABLE kendirloc.brand_temp (
              id int NOT NULL AUTO_INCREMENT,
              brand_id int NOT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB,
            CHARACTER SET utf8mb4,
            COLLATE utf8mb4_0900_ai_ci');

        DB::statement('CREATE TABLE kendirloc.manufactory_temp (
              id int NOT NULL AUTO_INCREMENT,
              manufactory_id int NOT NULL,
              PRIMARY KEY (id)
            )
            ENGINE = INNODB,
            CHARACTER SET utf8mb4,
            COLLATE utf8mb4_0900_ai_ci;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_temp');
        Schema::dropIfExists('brand_temp');
        Schema::dropIfExists('manufactory_temp');
    }
};
