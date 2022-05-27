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
        Schema::create('subscription', function (Blueprint $table) {
            $table->integer('productid')->primary();
            $table->string('name',30);
            $table->string('image',30);
            $table->integer('total_units');
            $table->integer('available_units');
            $table->float('price');
            $table->enum('subscription_type', ['Weekly', 'Fortnight', 'Monthly','Quarterly']);
            $table->longText('description');
            $table->float('pdt_taxrate',2,2);
            $table->float('offer_price',4,2);
            $table->date('expected_delivery_date');
            $table->date('product_created_date');   
            $table->enum('subscription_status', ['Active', 'Inactive']);
 
            $table->integer('farmer_id');   
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
