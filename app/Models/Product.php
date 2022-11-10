<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'id',
        'user_id',
        'cat_id',
        'phone_no',
        'division',
        'address',
        'condition',
    ];
}
