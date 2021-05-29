<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Trainer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SearchController extends Controller
{

   public function searchCompanies(Request $request)
   {

      $name = $request->get('search');
      $cateId=$request->get('categories');
      //    var_dump($name);die();
      //    die();
      $obj = new Company();
      $search = $obj->search($name,$cateId)->paginate(25);
      $obj1 = new Category();
      $categories = $obj1->pluck('category_name','category_id');
      return view('searchcompanies', [
         'companies' => $search,
         'name' => $name,
         'cateId'=> $cateId,
         'categories'=> $categories,
      ]);
   }

   public function searchTrainers(Request $request)
   {

      $name = $request->get('search');
      //    var_dump($name);die();
      //    die();
      $obj = new Trainer();
      $search = $obj->search($name)->paginate(25);
      return view('searchtrainers', ['trainers' => $search, 'name' => $name]);
   }
}
