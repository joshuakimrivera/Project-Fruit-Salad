<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cluster_two extends Model
{
    public $fillable = ['name', 'birthday', 'age', 'gender', 'address', 'college', 'year', 'section'];
}
