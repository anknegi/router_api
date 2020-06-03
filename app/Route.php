<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    use SoftDeletes; 

    protected $fillable = ['apid', 'hostname', 'loopback', 'mac_address','user_id'];
}