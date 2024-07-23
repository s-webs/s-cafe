<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class ProductCategory extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = ['name', 'description', 'image', 'priority', 'status'];
}
