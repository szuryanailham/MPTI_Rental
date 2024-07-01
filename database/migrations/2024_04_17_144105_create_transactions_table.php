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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id');
            $table->string('code')->unique(); ;
            $table->string('name');
            $table->text('address');
            $table->string('phone_number');
            $table->text('pickup_address');
            $table->date('start_date');
            $table->time('start_time');
            $table->text('return_address');
            $table->date('end_date');
            $table->time('end_time');
            $table->integer('duration');
            $table->integer('total');
            $table->string('status')->nullable();
            $table->timestamps();   
        });

        DB::statement("SET time_zone = '+07:00'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
