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
            $table->increments('prod_id');
            $table->string('prod_name');
            $table->integer('prod_price');
            $table->longText('prod_img');
            $table->string('prod_warranty')->nullable();
            $table->string('prod_accessories')->nullable();
            $table->string('prod_condition')->nullable();
            $table->string('prod_promotion')->nullable();
            $table->tinyInteger('prod_status')->nullable();
            $table->text('prod_description')->nullable();
            $table->tinyInteger('prod_featured')->nullable();
            $table->integer('prod_cate')->unsigned();
            $table->foreign('prod_cate')->references('id')->on('categories')->onDelete('cascade');
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
