<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //foreign to product
            $table->string('name', 255);
            $table->string('serial_number', 60)->nullable();
            $table->string('SKU', 128)->nullable();
            $table->string('filename', 255);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedDecimal('price', 10, 2)->nullable();
            $table->integer('quantity')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('product_variants');
    }
}
