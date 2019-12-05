<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mobile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('Mobile', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('mobile_no');
            $table->string('driver_name');
            $table->string('Mobile_officer');
            $table->integer('age');
            $table->rememberToken();
            $table->timestamps();
        });
    }
// id  mobile_no  driver_name  Mobile_officer no_of_staff location_id
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
