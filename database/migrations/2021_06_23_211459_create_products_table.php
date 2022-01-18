<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateProductsTable extends Migration
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
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_name')->references('name')->on('users');
            $table->string('salerdashpic')->references('dashpic')->on('users')->nullable();
            $table->string('title')->nullable();
            $table->string('category_name')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->integer('price')->nullable();
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

            $table->foreign('user_id')->references('id')
                ->on('users');
                
            $table->foreign('category_id')->references('id')->on('categories');
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
}
