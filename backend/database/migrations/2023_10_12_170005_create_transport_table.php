<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("plate")->unique();
            $table->string("brand");
            $table->string("model");
            $table->string("year");
            $table->uuid('driver_id')->unique();

            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};