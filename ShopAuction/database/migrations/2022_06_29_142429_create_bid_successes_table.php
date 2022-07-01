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
        Schema::create('bid_successes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productgroup_id')->unsigned();
            $table->foreign('productgroup_id')->references('id')->on('product_groups');
            $table->bigInteger('bidevent_id')->unsigned();
            $table->foreign('bidevent_id')->references('id')->on('bid_events');
            $table->bigInteger('bidwinner')->unsigned();
            $table->foreign('bidwinner')->references('id')->on('users');
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
        Schema::dropIfExists('bid_successes');
    }
};
