<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Umsermodel extends Model
{
    
    protected $table= 'umsers';
    protected $pk = 'um_id';
    public $timestamps = false;
    protected $fillable = ["*"];

}