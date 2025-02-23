<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    // public function setUserNameAttribute($value)
    // {
    //     $this->attributes['user_name'] = ucwords($value);
    // }


    // public function getDobAttribute($value)
    // {
    //     return date("m-d-Y", strtotime($value));
    // }
}
