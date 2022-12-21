<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'heading', 'detail', 'customer_id'];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
