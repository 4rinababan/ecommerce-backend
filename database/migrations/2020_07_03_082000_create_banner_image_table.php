<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_medias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banner_id');
            $table->tinyInteger('type')->unsigned();
            $table->string('filename', 255);
            $table->tinyInteger('action_type')->unsigned();
            $table->string('action_target', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('banner_id')->references('id')->on('banners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_medias');
    }
}
