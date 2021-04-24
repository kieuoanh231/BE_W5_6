<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function trainers(){
        $obj = new Trainer();
        $trainers=$obj->paginate(20);
        return view('trainers',['trainers'=>$trainers]);
    }
}
