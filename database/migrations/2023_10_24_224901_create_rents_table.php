<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rent', function (Blueprint $table) {
            $table->id();
            $table->date('check_in');
            $table->date('check_out');
            $table->foreignId('guest_id')->constrained('guest');
            $table->foreignId('room_id')->constrained('room');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rent');
    }
};
