<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function joinCompanies()
    {
    	return $this->hasMany('App\Models\Company','category_id','category_id');
    }
    
}
