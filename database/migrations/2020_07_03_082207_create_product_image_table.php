<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_medias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //foreign to product
            $table->tinyInteger('type')->unsigned();
            $table->string('filename', 255);
            $table->text('description')->nullable();
            $table->tinyInteger('sequence')->unsigned();
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
        Schema::dropIfExists('product_medias');
    }
}
