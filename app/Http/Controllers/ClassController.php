<?php

namespace App\Http\Controllers;
use App\Models\ClassModel;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        $classes = ClassModel::latest()->paginate(10);
        return view('classes.index', compact('classes'));
    }

    
}
