<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table ='persona';
}
