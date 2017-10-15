<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function setTodoAttribute($value)
    {
    	return $this->attributes['todo'] = ucfirst($value);
    }

    public function setTitleAttribute($value)
    {
    	return $this->attributes['title'] = ucfirst($value);
    }
}
