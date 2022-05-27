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
        Schema::create('buyonce', function (Blueprint $table) {
            $table->integer('productid')->primary();
            $table->string('name',30);
            $table->string('image',30);
            $table->float('price',4,2);
            $table->integer('total_units');
            $table->integer('available_units');
            $table->date('product_created_date');
            $table->longText('description');
            $table->float('pdt_taxrate',2,2);
            $table->float('offer_price',4,2);
            $table->date('expected_delivery_date');
            $table->boolean('confirmed'); 
            $table->integer('farmer_id');
            $table->integer('category_id',15);
            $table->foreign('category_id')->references('category_id')->on('product_category');   
            $table->foreign('farmer_id')->references('farmer_id')->on('farmer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
