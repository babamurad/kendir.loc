<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
        CREATE TABLE contacts (
            id bigint UNSIGNED NOT NULL AUTO_INCREMENT,
            name varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            phone varchar(255) NOT NULL,
            subject varchar(255) NOT NULL,
            message text NOT NULL,
            created_at timestamp NULL DEFAULT NULL,
            updated_at timestamp NULL DEFAULT NULL,
            PRIMARY KEY (id)
          )
          ENGINE = INNODB,
          AUTO_INCREMENT = 5,
          AVG_ROW_LENGTH = 4096,
          CHARACTER SET utf8mb4,
          COLLATE utf8mb4_unicode_ci,
          ROW_FORMAT = DYNAMIC;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
