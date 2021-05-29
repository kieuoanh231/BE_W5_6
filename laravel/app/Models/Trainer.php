<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainers';
    // use HasFactory;
    public function search($key)
    {
        $data = self::where('trainer_name', 'like', '%' . $key . '%')
            ->orwhere('trainer_email', 'like', '%' . $key . '%')
            ->orwhere('trainer_phone', 'like', '%' . $key . '%');
        // $data->withPath('/search' . '?search='.$key);
        return $data;
    }

    public function joinCompany(){
        return $this->hasOne(Company::class,'company_id','company_id');
    }
}
