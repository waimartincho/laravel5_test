<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'productstbl';

    protected $fillable = [
        'title', 'description', 'photo','price','home_office','type','status',
    ];
}
