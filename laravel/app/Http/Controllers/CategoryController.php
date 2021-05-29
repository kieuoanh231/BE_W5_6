<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function categories()
    {
        $obj = new Category();
        $categories = $obj->paginate(20);
        return view('categories_companies', ['categories' => $categories]);
    }

    public function myMethod(){
        $categories = DB::table('categories')->pluck('category_id', 'category_name')->toArray();
        // foreach ($categories as $category_name => $category_id) {
        //    echo($category_name);
        // }
        return view('categories', ['categories' => $categories]);
        // @foreach ($users as $id => $name)
        //     {{ $name }} có mã số là {{ $id }}
        // @endforeach
    }

}
