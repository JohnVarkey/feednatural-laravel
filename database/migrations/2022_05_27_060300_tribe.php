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
        scheme::create('tribe',function(Blueprint $table){
            $table->integer('trb_user_id')->primary();
            $table->string('tribe_join_key',15);
            $table->integer('trb_members');
            $table->date('trb_leave_date');
            $table->text('trb_verified_by');
            $table->date('trb_verified_date');
            $table->integer('user_id');
            $table->date('join_date');
            $table->enum('trb_member_status',['new','verified'.'pendin']);
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
