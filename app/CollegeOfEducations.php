<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeOfEducations extends Model
{
    public $fillable = ['name', 'bday_month', 'bday_day', 'bday_year', 'age', 'gender', 'address', 'college', 'department', 'year', 'section'];
}
