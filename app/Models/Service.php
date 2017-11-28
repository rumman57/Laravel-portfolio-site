<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function service_lists(){
    	return $this->hasMany('App\Models\ServiceList');
    }
}
