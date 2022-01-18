<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('userid')->unsigned();
            $table->string('title');
            $table->float('price');
            $table->longText('desc');
            $table->string('pictures')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('type')->nullable();
            $table->string('adtyper')->nullable();
            $table->string('street')->nullable();
            $table->string('zipcode')->nullable();
            $table->enum('shipment', ['yes', 'no'])->nullable();
            $table->enum('top', ['yes', 'no'])->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
        });

        Schema::table('market', function (Blueprint $table) {
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market');
    }
}
