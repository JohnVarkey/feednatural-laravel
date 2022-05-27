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
        Schema::create('ship_address', function (Blueprint $table) {
            $table->integer('ship_addr_id')->primary();
            $table->integer('user_id');
            $table->string('first_name',15);
            $table->string('last_name',15);
            $table->string('house_no',6);
            $table->string('city',15);
            $table->string('pincode',6);
            $table->string('state',15);
            $table->string('country',10);
            $table->string('mobile_no',15);
            $table->date('ship_addr_date');
            $table->foreign('user_id')->references('user_id')->on('user');
                    
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
