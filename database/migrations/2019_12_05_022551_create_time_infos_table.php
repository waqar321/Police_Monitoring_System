<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up(){
        Schema::create('time_infos', function (Blueprint $table){
            $table->bigIncrements('Time_id');
            $table->dateTime('Time_Diff');
            $table->dateTime('Reach_T');
            $table->dateTime('Reachable_T');
            $table->dateTime('Complaint_T');
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
        Schema::dropIfExists('time_infos');
    }
}
