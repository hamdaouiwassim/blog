<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table='clients';
        protected $primarykey='id';
        protected $fillable= [
         'fullname',
        'email',
        'gendre',
        'age'];
}
