<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    // use HasFactory;

    public function search($key,$categoryId){
       $data= self::where('company_name','like','%'.$key.'%')->where('category_id','=', $categoryId);
        return $data;
    }

    public function joinTrainer(){
        return $this->hasOne(Trainer::class,'company_id','company_id');
    }
}
