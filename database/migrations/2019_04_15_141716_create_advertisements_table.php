<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('description');
            $table->float('price');
            $table->string('phone');
            $table->text('image');
            $table->unsignedBigInteger('id_sub_category');
            $table->unsignedBigInteger('id_county');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_sub_category')->references('id')->on('sub_categories');
            $table->foreign('id_county')->references('id')->on('counties');
            $table->foreign('id_user')->references('id')->on('users');

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
        Schema::dropIfExists('advertisements');
    }
}
