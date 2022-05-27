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
        Schema::create('user_pages', function (Blueprint $table) {
            $table->integer('page_id')->primary();
            $table->integer('role_id'); 
            $table->string('page_name') ;
            $table->string('permissions');
            $table->foreign('role_id')->references('role_id')->on('usertype');        
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
