<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    //
    protected $fillable = [
        'business_id',
        'category_id',
    ];
}