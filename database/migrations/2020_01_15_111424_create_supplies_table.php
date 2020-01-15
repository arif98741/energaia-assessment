<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{

    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('admin_id');
            $table->string('amount');
            $table->longText('descriptions');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('admin_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}