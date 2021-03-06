<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
 public function up(){
        Schema::create('feedback_users', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('Display_name');
            $table->string('email')->unique();
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
        Schema::dropIfExists('feedback_users');
    }
}
