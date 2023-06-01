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
        Schema::table('sapi', function (Blueprint $table) {
            $table->renameColumn('IdSapi', 'idSapi');
            $table->renameColumn('BeratSapi', 'beratSapi');
            $table->renameColumn('JenisSapi', 'jenisSapi');
            $table->renameColumn('HargaSapi', 'hargaSapi');
            $table->renameColumn('KesehatanSapi', 'kesehatanSapi');


        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rename_field_to_sapi');
    }
};
