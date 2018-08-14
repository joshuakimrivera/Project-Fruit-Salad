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
            $table->text('last_name')->nullable();
            $table->text('first_name')->nullable();
            $table->text('middle_initial')->nullable();
            $table->integer('date_sorter')->nullable();
            $table->text('bday_month')->nullable();
            $table->text('bday_day')->nullable();
            $table->text('bday_year')->nullable();
            $table->integer('age')->nullable();
            $table->char('gender')->nullable();
            $table->text('address')->nullable();
            $table->char('college')->nullable();
            $table->char('department')->nullable();
            $table->integer('year')->nullable();
            $table->integer('section')->nullable();
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
