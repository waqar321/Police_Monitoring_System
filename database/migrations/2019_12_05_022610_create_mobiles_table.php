<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
public function up(){
        Schema::create('mobiles', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('mobile_no');
            $table->string('driver_name');
            $table->string('Mobile_officer');
            $table->integer('no_of_staff');
            $table->integer('location_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiles');
    }
}
