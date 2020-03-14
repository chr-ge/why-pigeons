<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected  $fillable = [
        'name', 'description', 'phone', 'category_id', 'image',
    ];
}
