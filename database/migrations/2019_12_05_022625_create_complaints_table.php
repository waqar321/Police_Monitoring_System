<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
  public function up(){
        Schema::create('complaints', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->dateTime('C_date');
            $table->dateTime('C_time');
            $table->string('Description');
            $table->integer('crime_id');
            $table->integer('report_by');
            $table->integer('user_id');
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
        Schema::dropIfExists('complaints');
    }
}
