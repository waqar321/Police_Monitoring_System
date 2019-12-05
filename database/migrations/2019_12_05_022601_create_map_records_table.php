<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
 public function up(){
        Schema::create('map_records', function (Blueprint $table){
            $table->bigIncrements('record_id');
            $table->enum('identifier', ['user', 'mobile']);
            $table->decimal('latitude', 8, 2);
            $table->decimal('longitude', 8, 2);
            $table->Integer('complaint_id');
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
        Schema::dropIfExists('map_records');
    }
}
