<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->longText('image')->nullable();
            $table->longText('product_code')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('pf')->nullable();
            $table->string('offer')->nullable();
            $table->string('prev_price')->nullable();
            $table->string('new_price')->nullable();
            $table->string('discount')->nullable();
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
        Schema::dropIfExists('products');
    }
}
