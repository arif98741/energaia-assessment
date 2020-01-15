<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->unsignedBigInteger('product_category_id');
            $table->longText('descriptions');
            $table->double('price', 8, 2);
            $table->string('unit');
            $table->string('image');
            $table->timestamps();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}