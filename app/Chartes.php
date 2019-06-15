<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chartes extends Model
{
    protected $table= 'charts';
    protected $fillable =['nom','chartes'];
}
