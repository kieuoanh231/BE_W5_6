<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Companies;
use App\Models\Company;
use App\Models\Trainer;
use App\Models\Trainers;
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
      $cateid = $request->get('categories');
         // var_dump($cateid);die();
      //    die();
      $obj = new Companies();
      $search = $obj->search($name,$cateid)->paginate(25);
      $obj1 = new Categories();
      $categories = $obj1->pluck('category_name','category_id');
      return view('searchcompanies', [
         'companies' => $search,
         'name' => $name,
         'cateId'=> $cateid,
         'categories'=> $categories,
      ]);
   }

   // public function searchTrainers(Request $request)
   // {

   //    $name = $request->get('search');
   //    //    var_dump($name);die();
   //    //    die();
   //    $obj = new Trainers();
   //    // $search = $obj->search($name)->paginate();
   //    return view('searchtrainers', ['trainers' => $search, 'name' => $name]);
   // }
}
