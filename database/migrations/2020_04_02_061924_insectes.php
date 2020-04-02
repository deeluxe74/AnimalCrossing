<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Insectes extends Migration
{
    public function up()
    {
        Schema::create('insectes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rare');
            $table->string('when');
            $table->string('where');
            $table->string('price');
            $table->string('img');
        });
    }

    public function down()
    {
        Schema::dropIfExists('insecte');
    }
}
