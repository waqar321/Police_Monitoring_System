<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Operators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('Operators', function (Blueprint $table){
            $table->bigIncrements('operator_id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('Fname');
            $table->string('Lname');
            // $table->string('O_Password')->length(11);
            $table->string('O_Password')->length(11);
            $table->integer('age');
            $table->string('M_Number');
            $table->string('O_rank');
            $table->string('Service_no');
            $table->string('O_Address');
            $table->string('cnic');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
// operator_id username Fname Lname O_Password age M_Number O_rank Service_no O_Address cnic

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
