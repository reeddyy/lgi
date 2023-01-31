<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_7801469')->references('id')->on('countries');
            $table->unsignedBigInteger('industry_id')->nullable();
            $table->foreign('industry_id', 'industry_fk_7801470')->references('id')->on('industries');
            $table->unsignedBigInteger('turnover_id')->nullable();
            $table->foreign('turnover_id', 'turnover_fk_7801471')->references('id')->on('turnovers');
            $table->unsignedBigInteger('employment_id')->nullable();
            $table->foreign('employment_id', 'employment_fk_7801482')->references('id')->on('employments');
        });
    }
}
