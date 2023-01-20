<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    //use fillable method
    protected $fillable = ['id', 'name'];
    //false timestamps
    public $timestamps = false;

    //relationship of mophbyMany-(Many to Many)
    public function photos()
    {
        return $this->morphedByMany(Photo::class, 'taggable');
    }
    //relationship of mophbyMany-(Many to Many)
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
