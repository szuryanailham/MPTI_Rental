<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('price');
            $table->integer('capacity');
            $table->string('steering');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::statement("SET time_zone = '+07:00'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
