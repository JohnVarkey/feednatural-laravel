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
        scheme::create('tribe_community',function(Blueprint $table){
            $table->integer('tcommunity_id')->primary();
            $table->integer('tribe_id');
            $table->integer('trb_member_id');
            $table->date('join_date');
            $table->enum('trb_member_status',['new','accepted'.'cancelled']);
           
           
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
