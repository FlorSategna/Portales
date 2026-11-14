<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    protected $primaryKey = 'bag_id';
    protected $fillable = ['name', 'price', 'liters', 'description', 'photo', 'category', 'gender'];
}
