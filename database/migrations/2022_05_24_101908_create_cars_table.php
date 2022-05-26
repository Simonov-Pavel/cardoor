<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('slug')->index()->unique()->nullable();
            $table->string('brithday');
            $table->string('price');
            $table->string('img');
            $table->string('img_webp');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->foreignId('body_id')->constrained()->onDelete('cascade');
            $table->foreignId('class_cars_id')->constrained()->onDelete('cascade');
            $table->foreignId('engine_id')->constrained()->onDelete('cascade');
            $table->foreignId('transmission_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
