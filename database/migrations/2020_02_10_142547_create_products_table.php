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
            $table->string('title');
            $table->float('base_price')->default(0);
            $table->string('discount_price')->nullable()->comment('How much discount in price amount');
            $table->string('discount_percentage')->nullable()->comment('How much discount in price percentage');
            $table->string('tax')->nullable();
            $table->string('description');
            $table->string('tags')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('brand_id')->nullable();
            $table->integer('store_id');
            $table->integer('category_id');
            $table->enum('status',['publish','unpublish']);
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
