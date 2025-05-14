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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->string('room_name', 255);
            $table->enum('category', ['reguler', 'vip', 'vvip']);
            $table->text('description')->nullable();
            $table->text('facilities')->nullable();
            $table->decimal('base_price_hour', 10, 2);
            $table->decimal('base_price_day', 10, 2);
            $table->decimal('base_price_month', 10, 2);
            $table->integer('stock');
            $table->string('room_image', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
