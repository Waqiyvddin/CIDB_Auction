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
        Schema::create('bid_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productgroup_id')->unsigned();
            $table->foreign('productgroup_id')->references('id')->on('product_groups');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time', $precision = 0);
            $table->time('end_time', $precision = 0);
            $table->integer('duration_minute');
            $table->integer('isLoop');
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
        Schema::dropIfExists('bid_infos');
    }
};
