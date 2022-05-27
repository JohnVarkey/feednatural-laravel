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
        Schema::create('useraddress', function (Blueprint $table) {
            $table->integer('address_id')->primary();
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('pin_code',6);
            $table->string('flataddress');
            $table->string('appartmentname',15);
            $table->string('landmark',20);
            $table->string('locality',20);
            $table->enum('address_type', ['Apartment', 'House', 'Office']);
            $table->string('district',15);
            $table->string("state",15);
            $table->string('country', 30);
            $table->string('mobile_number',15);
            $table->string('alt_mobile_number',15);
            $table->string('map_data');
            
            $table->foreign(user_id)->references('user_id')->on('user');
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
