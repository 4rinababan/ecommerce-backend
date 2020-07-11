<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTableAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('phone', 50)->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('language', 5)->nullable();
            $table->tinyInteger('role')->unsigned();
            $table->unsignedBigInteger('customer_group_id')->default(0);
            $table->tinyInteger('status')->unsigned()->default(1);
            $table->string('remark')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('phone');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('language');
            $table->dropColumn('role');
            $table->dropColumn('customer_group_id');
            $table->dropColumn('status');
            $table->dropColumn('remark');
            $table->dropSoftDeletes();
        });
    }
}
