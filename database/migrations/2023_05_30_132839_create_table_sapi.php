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
        Schema::create('sapi', function (Blueprint $table) {
            $table->increments('IdSapi');
            $table->decimal('BeratSapi', 10, 2);
            $table->string('JenisSapi');
            $table->decimal('HargaSapi', 10, 2);
            $table->string('KesehatanSapi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_sapi');
    }
};
