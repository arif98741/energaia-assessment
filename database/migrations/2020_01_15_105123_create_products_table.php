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
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->longText('descriptions');
            $table->double('price', 8, 2);
            $table->string('unit');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('set null')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}