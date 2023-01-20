<?php

namespace App\Models;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Casts\AsStringable;

class Mutator extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mutators';
    protected $appends = ['full_name'];
    protected $fillable = ['id', 'first_name', 'last_name', 'city', 'is_active', 'created_at', 'status'];

    // protected $is_active = ['boolean'];

    //Example of Accessor

    public function getFullNameAttribute($value)
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name) . ' City:' . ucfirst($this->city) . '-' . 'India';
    }
    // public function getFullNameAttribute()
    // {
    //   return ucfirst($value);
    // }

    // public function getLastNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }
    // public function getcityAttribute($value)
    // {
    //     return $value . ".India";
    // }


    //Example of Mutator
    public function setFirstNameAttribute($value)
    {
        return $this->attributes['first_name'] = 'Miss.' . $value;
    }
    public function setCityAttribute($value)
    {
        return $this->attributes['city'] = $value . '.India';
    }

    //Casting
    protected $casts = [
        'is_active' => 'boolean',
        'last_name' => 'encrypted',
        'created_at' => 'datetime:F:j:Y-h',
        'status' => StatusEnum::class
        //'is_active' => AsStringable::class,

    ];
}
