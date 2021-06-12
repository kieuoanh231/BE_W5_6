<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\Trainers;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function trainers(){
        $obj = new Trainers();
        $trainers=$obj->paginate(20);
        return view('trainers',['trainers'=>$trainers]);
    }
}
