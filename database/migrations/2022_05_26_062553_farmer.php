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
        Schema::create('farmer', function (Blueprint $table) {
            $table->integer('farmer_id')->primary();
            $table->string('name',30);
            $table->string('image',30);
            $table->string('username',30);
            $table->longText('password');
            $table->string('location',30);
            $table->string('farm_name',30);
            $table->string('state',15);
            $table->string('farm_email',30);
            $table->string('mobile_no',15);
            $table->date('creation_date');
            $table->longText('farmer_description');
            $table->enum('farmer_status', ['Active', 'Inactive', 'Disabled']);

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
