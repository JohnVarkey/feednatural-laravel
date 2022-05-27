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
        Schema::create('payment_transaction', function (Blueprint $table) {
            $table->integer('pay_tr_id')->primary();
            $table->integer('order_id');
                $table->string('payment_reference',15);
                $table->string('payment_mode',15);
                $table->date('payment_date');
                $table->float('payment_amnt',5,2);
                $table->string('payment_account',15);
                $table->string('payment_status character',15);
                $table->string('payment_verified_by',15);
                $table->boolean('payment_verify_status');
                     
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
