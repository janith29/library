<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('did');
            $table->string('date');
            $table->string('pronounced');
            $table->string('gender');
            $table->string('name');
            $table->string('address');
            $table->string('divice');
            $table->string('diagnosis');
            $table->string('prescription');
            $table->string('warranty');
            $table->string('deliverydate');
            $table->string('price');
            $table->string('pricevalidity');
            $table->string('paymentmethod');
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
        Schema::dropIfExists('quotations');
    }
}
