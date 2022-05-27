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
        Schema::create('preorder', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('name',30);
                $table->string('image',30);
                $table->float('price',4,2);
                $table->integer('total_units');
                $table->integer('available_units');
                $table->date('product_created_date');
                $table->dateTime('time_closing', $precision = 2);
                $table->longText('description');
                $table->float('pdt_taxrate',2,2);
                $table->float('offer_price',4,2);
                $table->date('expected_delivery_date');
                $table->integer('farmer_id');     
                   
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
