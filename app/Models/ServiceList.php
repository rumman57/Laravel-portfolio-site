<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    public function service(){
    	return $this->belongsTo('App\Models\Service');
    }
}
