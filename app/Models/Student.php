<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //Use for define table
    protected $table = 'students';

    //create fillabe array for inserting dtaa in database
    protected $fillable = ['id', 'name', 'email', 'city', 'marks'];
}
