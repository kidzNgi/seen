<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seennew extends Model
{
    //
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'detail', 'image1','user_id', 'image2', 'image3', 'image4', 'image5',
    ];
}
