<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'logs';
    public $timestamps = 'false';
    protected $fillable = ['params','position','ended_at','ended_at_date'];

}
