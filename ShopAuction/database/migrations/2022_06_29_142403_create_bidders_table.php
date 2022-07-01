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
        Schema::create('bidders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productgroup_id')->unsigned();
            $table->foreign('productgroup_id')->references('id')->on('product_groups');
            $table->bigInteger('bidevent_id')->unsigned();
            $table->foreign('bidevent_id')->references('id')->on('bid_events');
            $table->bigInteger('bid_by')->unsigned();
            $table->foreign('bid_by')->references('id')->on('users');
            $table->double('bid_price');
            $table->timestamp('bid_at', $precision = 0);
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
        Schema::dropIfExists('bidders');
    }
};
