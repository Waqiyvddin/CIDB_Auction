<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordereds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productgroup_id')->unsigned();
            $table->foreign('productgroup_id')->references('id')->on('product_groups');
            $table->integer('quantity');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('productstatuslog_id')->unsigned();
            $table->foreign('productstatuslog_id')->references('id')->on('product_status_logs');
            // $table->string('status',20);
            // $table->bigInteger('status_by')->unsigned();
            // $table->foreign('status_by')->references('id')->on('users');
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
        Schema::dropIfExists('ordereds');
    }
};
