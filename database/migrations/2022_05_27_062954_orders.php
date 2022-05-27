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
        scheme::create('orders',function(Blueprint $table){
            $table->integer('order_id')->primary();
            $table->integer('ord_user_id');
            $table->date('order_date');
            $table->string('ship address',30);
            $table->string('products',500);
            $table->float('total_amt');
            $table->string('order_status',30);
            $table->enum('order_status',['NEW', 'PROCESSING', 'ONHOLD', 'SHIPPED', 'COMPLETED', 'CANCELLED']);
            $table->string('user_firstname ',15);
            $table->string('user_lastname ',15);
            $table->string('user_mobile',15);
            $table->string('user_email',30);
            $table->string('transaction_id',15);
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
