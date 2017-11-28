<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioService extends Model
{
    public function port_service_lists(){
    	return $this->hasMany('App\Models\PortServiceList');
    }
}
