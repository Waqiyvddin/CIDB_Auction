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
        Schema::create('product_groups', function (Blueprint $table) {
            $table->id();
            $table->string('title',50)->nullable();
            $table->string('location',50)->nullable();
            $table->string('description',250)->nullable();
            $table->double('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('condition',20)->nullable();
            $table->string('isDiscounted',5);
            $table->double('discount_percent',4,2)->nullable();
            $table->string('visibility',10);
            $table->string('for',10);
            $table->string('status',10);

            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users');

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
        Schema::dropIfExists('product_groups');
    }
};
