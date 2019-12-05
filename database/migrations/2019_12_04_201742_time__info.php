<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TimeInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('TimeInfo', function (Blueprint $table){
            $table->bigIncrements('Time_id');
            $table->>dateTime('Time_Diff');
            $table->>dateTime('Reach_T');
            $table->>dateTime('Reachable_T');
            $table->>dateTime('Complaint_T');
            $table->rememberToken();
            $table->timestamps();
        });
    }
// Time_id Time_Diff Reach_T Reachable_T Complaint_T
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
