<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colleges extends Model
{
    public $fillable = ['name', 'birthday', 'age', 'gender', 'address', 'college', 'department', 'year', 'section'];
}
