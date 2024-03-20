<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nuevo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function(Blueprint $table) {
         $table ->id();
         $table ->string("placa");
         $table ->string("codigo");
         $table ->text("transporte");
         $table ->string("color");
         $table ->timestamp("modelo");
         $table ->string("capacidad");
         $table ->dateTime("fecha");
         $table ->dateTime("hora");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("curso");
    }
}
