<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feriado extends Model
{
    protected $fillable = ['descripcion','mes','dia'];
    protected $dateFormat = 'd-m-y h:i:s';
    
    

	//public function setfechaAttribute($value)
    //{
    //   $this->attributes['fecha'] = \Carbon\Carbon::parse($value)->format('d-m-y');
    
}
