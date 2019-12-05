<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    public function up(){
        Schema::create('operators', function (Blueprint $table){
            $table->bigIncrements('operator_id');
            $table->string('username');
            $table->string('phone');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('email')->unique();
            $table->string('password')->length(11);
            $table->integer('age');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('cnic');
            $table->string('address');
            $table->string('rank');
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
        Schema::dropIfExists('operators');
    }
}
