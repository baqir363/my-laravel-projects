<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\WebGuard;

class Group extends Model
{
    //
    protected $primaryKey = "group_id";

    function member()
    {
        return $this->hasMany('App\Models\Member', 'group_id', 'group_id');
    }


}
