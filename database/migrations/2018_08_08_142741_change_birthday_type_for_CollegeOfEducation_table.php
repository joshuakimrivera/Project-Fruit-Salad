<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBirthdayTypeForCollegeOfEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('college_of_educations', function (Blueprint $table) {
            $table->dropColumn('birthday');
            $table->text('bday_month')->after('name');
            $table->text('bday_day')->after('bday_month');
            $table->text('bday_year')->after('bday_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('bday_month');
        $table->dropColumn('bday_day');
        $table->dropColumn('bday_year');
    }
}
