<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    public $table = "staffs";
        protected $fillable = [
        'user_id', 'position_id','facuty_id',
    ];
}
