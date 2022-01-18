<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdrepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adreplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();
            $table->longText('description');
            $table->string('type');
            $table->integer('price');
            $table->string('pictures')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('zipcode')->nullable();
            $table->enum('shipment', ['yes', 'no'])->nullable();
            $table->enum('top', ['yes', 'no'])->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adreplies');
    }
}
