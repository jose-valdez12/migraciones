<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tranporte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("trasnportes",function(Blueprint $table){
            $table ->id();
            $table ->string("codigo");
            $table ->string("nombre");
            $table ->string("razones");
            $table ->dateTime("hora");
            $table ->dateTime("dia");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("transportes");
    }
}
