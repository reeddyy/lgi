<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('designation')->nullable();
            $table->string('company')->nullable();
            $table->string('country')->nullable();
            $table->string('industry')->nullable();
            $table->string('turnover')->nullable();
            $table->string('employment')->nullable();
            $table->string('bv')->nullable();
            $table->string('bs')->nullable();
            $table->string('tpt')->nullable();
            $table->string('tc')->nullable();
            $table->string('emp')->nullable();
            $table->string('lc')->nullable();
            $table->string('wh')->nullable();
            $table->string('wc')->nullable();
            $table->string('inv')->nullable();
            $table->string('gfs')->nullable();
            $table->longText('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
