<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'email'];

    //relationship hasOne()-get data of Cutomer to mobile
    public function mobile()
    {
        return $this->hasOne(Mobile::class); //->select('id', 'model', 'customer_id');//restrict field throught Model
    }
    public function review()
    {
        return $this->hasMany(Review::class); //->select('id', 'model', 'customer_id');//restrict field throught Model
    }
}
