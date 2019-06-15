<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupes extends Model
{
    protected $table='groupes';
    protected $primarykey='id';
    protected $fillable= [
     'name'
];
}
