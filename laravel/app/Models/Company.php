<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey='company_id';
    // use HasFactory;

    public function search($key){
       $data= self::where('company_name','like','%'.$key.'%');
        return $data;
    }

    public function joinTrainer(){
        return $this->hasOne(Trainer::class,'company_id','company_id');
    }

}
