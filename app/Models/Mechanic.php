<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'machanic_name'];
    //hasoneThought-ralation function
    // public function owner()
    // {
    //     return $this->hasOneThrough(Owner::class, Bike::class);
    // }

    //hasMany-relation function
    public function bike()
    {
        return $this->hasMany(Bike::class);
    }
    public function owner()
    {
        return $this->hasManyThrough(Owner::class, Bike::class);
    }
}
