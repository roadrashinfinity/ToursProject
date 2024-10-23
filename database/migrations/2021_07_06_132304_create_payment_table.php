<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            
            $table->id();
            $table->integer('booking_id')->unsigned()->index()->nullable();
            $table->foreign('booking_id')->references('id')->on('booking');
            $table->integer('user_id')->unsigned();
            $table->string('card_no');
            $table->string('cardholder_name');
            $table->string('expiry_date');
            $table->string('cvv');
            $table->string('package_price')->nullable();
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
        Schema::dropIfExists('payment');
    }
}
