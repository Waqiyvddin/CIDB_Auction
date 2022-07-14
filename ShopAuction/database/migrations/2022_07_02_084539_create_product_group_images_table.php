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
        Schema::create('product_group_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('productgroup_id')->unsigned();
            $table->foreign('productgroup_id')->references('id')->on('product_groups');
            $table->string('image_path', 200);
            $table->string('image_name', 200);
            $table->integer('image_index');
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
        Schema::dropIfExists('product_group_images');
    }
};
