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
        Schema::create('bags', function (Blueprint $table) {

            $table->id('bag_id');
            $table->string('name', 100);
            $table->string('category', 100);
            $table->string('gender', 100);
            $table->text('description');
            $table->unsignedInteger('price');
            $table->unsignedInteger('liters');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bags');
    }
};
