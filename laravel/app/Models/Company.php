<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    // use HasFactory;

    public function search($key){
       $data= self::where('company_name','like','%'.$key.'%');
        return $data;
    }
}
