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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id');
            $table->string('invoice', 255);
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->enum('duration_type', ['Jam', 'Hari', 'Bulan'])->nullable();
            $table->decimal('total_price', 10, 2)->nullable();
            $table->enum('status', ['menunggu', 'diterima', 'ditolak', 'selesai', 'dibatalkan'])->nullable();
            $table->enum('payment_status', ['belum dibayar', 'sudah dibayar'])->nullable();
            $table->date('payment_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('room_id')->references('room_id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
