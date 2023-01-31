<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoversTable extends Migration
{
    public function up()
    {
        Schema::create('turnovers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turnover')->unique();
            $table->integer('factor')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
