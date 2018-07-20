<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feriado extends Model
{
    protected $fillable = ['fecha','descripcion'];
    protected $dateFormat = 'y-m-d h:i:s';
    
    public function getfechaAttribute($value)
	{
	    return date('d-m', strtotime($value));
	}

	public function setfechaAttribute($value)
    {
        $this->attributes['fecha'] = \Carbon\Carbon::parse($value)->format('d-m-y');
    }
}
