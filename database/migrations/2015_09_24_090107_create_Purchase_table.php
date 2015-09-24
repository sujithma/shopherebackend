<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->date('date');
            $table->string('purchased_shop');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->integer('unit_price');
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
        Schema::drop('Purchase');
    }
}
