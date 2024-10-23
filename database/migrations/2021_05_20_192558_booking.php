<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('packages_id')->unsigned()->index()->nullable();
            $table->foreign('packages_id')->references('id')->on('packages');
            $table->string('package_name')->nullable();
            $table->string('package_price')->nullable();
            $table->string('from');
            $table->string('to');
            $table->string('adults');
            $table->string('children');
            $table->integer('user_id')->unsigned();
            $table->string('email');
            $table->string('phone');
            $table->string('status')->nullable();
           
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
        Schema::dropIfExists('booking');
    }
}
