<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeOfEngineeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_of_engineerings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('last_name');
            $table->text('first_name');
            $table->text('middle_initial');
            $table->text('bday_month');
            $table->text('bday_day');
            $table->text('bday_year');
            $table->integer('age');
            $table->char('gender');
            $table->text('address');
            $table->char('college');
            $table->char('department');
            $table->integer('year');
            $table->integer('section');
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
        Schema::dropIfExists('college_of_engineerings');
    }
}
