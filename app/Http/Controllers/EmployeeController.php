<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employees');
    }

    public function create(Request $request){
        dd($request);
    }

    public function store(){
        
    }
}
