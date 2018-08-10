<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeOfEngineerings extends Model
{
    public $fillable = ['last_name', 'first_name', 'middle_initial', 'date_sorter', 'bday_month', 'bday_day', 'bday_year', 'age', 'gender', 'address', 'college', 'department', 'year', 'section'];
}
