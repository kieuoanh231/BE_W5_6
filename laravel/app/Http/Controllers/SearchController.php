<?php

namespace App\Http\Controllers;

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
    //    var_dump($name);die();
    //    die();
       $obj = new Company();
       $search = $obj->search($name)->paginate(25);
       return view('search', ['companies' => $search,'name'=>$name]);
   }

   public function searchTrainers(Request $request)
   {

       $name = $request->get('search');
    //    var_dump($name);die();
    //    die();
       $obj = new Trainer();
       $search = $obj->search($name)->paginate(25);
       return view('search', ['trainers' => $search,'name'=>$name]);
   }
}
