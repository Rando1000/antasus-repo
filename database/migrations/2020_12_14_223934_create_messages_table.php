<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->longText('message');
            $table->tinyInteger('type')->default(1)
                ->comment('1:message, 2:file');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            // $table->foreign('user_id', 'user_name')->references('id', 'name')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
