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
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('name');
            $table->string('file_name');
        });
        Schema::create('text', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('content');
            $table->integer('audio_id');
            $table->integer('page_id');
            $table->float('XPos');
            $table->float('YPOs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
