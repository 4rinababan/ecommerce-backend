<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); //foreign to order
            $table->unsignedBigInteger('product_variant_id'); //foreign to product
            $table->json('product_json');
            $table->json('product_variant_json');
            $table->unsignedDecimal('sub_price', 10, 2)->nullable();
            $table->integer('quantity')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_variant_id')->references('id')->on('product_variants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
