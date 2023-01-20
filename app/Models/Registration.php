<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registers';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'email', 'password', 'startdate', 'enddate', 'marks', 'file_name'];
}
