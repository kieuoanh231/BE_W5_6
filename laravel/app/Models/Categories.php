<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'Categories';

    public function getAllCategories()
    {
        $categories = $this->all();
        return $categories;
    }

    public function getPluckCategories()
    {
        $categories = $this->pluck('category_name', 'category_id');
        return $categories;
    }

    public function category(){
        return $this->morphTo();
    }

    // public function joinCompanies()
    // {
    // 	return $this->hasMany('App\Models\Companies','category_id','category_id');
    // }
}
