<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;
class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $primaryKey = "company_id";

    public function getCompanies(){
       $companies =  $this->paginate(15);
       return $companies;
    }

    public function getCompaniesRelation(){
        return $this->hasOne(Trainers::class, 'company_id',"company_id");
    }

    public function categoryRelation(){
        return $this->hasMany(Categories::class, "category_id");
    }

    public function search($key,$categoryName){
        $result = $this ->where('company_name','LIKE', "%{$key}%")
                        ->where('category_id',$categoryName)
                        ->orWhere('company_phone','LIKE',"%{$key}%")
                        ->where('category_id',$categoryName)
                        ->orWhere('company_web','LIKE',"%{$key}%")
                        ->where('category_id',$categoryName)
                        ->orWhere('company_address','LIKE',"%{$key}%")
                        ->where('category_id',$categoryName)
                        ->orWhere('company_code','LIKE',"%{$key}%")
                        ->where('category_id',$categoryName)
                        ->paginate(15);

        $result->withPath(route('searchCompanies') . "?k=" . str_replace(' ','+',$key));
        return $result;
    }

    public function category(){
        return $this->morphMany(Categories::class, "category");
    }

}
