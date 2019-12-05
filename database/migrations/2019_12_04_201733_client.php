<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up(){
        Schema::create('Victim', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fname');
            $table->string('Number');
            $table->string('Cnic');
            $table->rememberToken();
            $table->timestamps();
        });
    }
// name fname Number Cnic
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
