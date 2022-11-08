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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->string('phone_no');
            $table->string('division');
            $table->string('address');
            $table->string('condition');
            $table->string('title');
            $table->string('description',500);
            $table->string('price');
            $table->string('negotiable');
            $table->string('images');
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('products');
    }
};
