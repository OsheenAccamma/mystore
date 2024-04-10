<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('priority');

            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->integer('rating')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();

            $table->string('image1')->nullable();

            $table->string('image2')->nullable();

            $table->string('image3')->nullable();

            $table->string('image4')->nullable();
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('status')->default('1');

            $table->integer('delivery_charges')->nullable();

            $table->string('additional_info')->nullable();

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
