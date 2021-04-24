<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CompanyController extends Controller
{
    public function companies()
    {
        $obj = new Company();
        $companies = $obj->paginate(20);
        return view('companies', ['companies' => $companies]);
    }

  
}
