<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortServiceList extends Model
{
    public function portfolio_service(){
    	return $this->belongsTo('App\Models\PortfolioService');
    }
}
