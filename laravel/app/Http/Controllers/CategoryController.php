<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function categories()
    {
        $obj = new Categories();
        $categories = $obj->paginate(20);
        return view('categories_companies', ['categories' => $categories]);
    }

    public function myMethod(){
        $categories = DB::table('categories')->pluck('category_id', 'category_name')->toArray();
        return view('categories', ['categories' => $categories]);
        // @foreach ($users as $id => $name)
        //    echo {{ $name }} có mã số là {{ $id }}
        // @endforeach
    }
}
