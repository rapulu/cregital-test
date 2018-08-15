<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('companies');
    }

    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required'
            
        ]);
        dd($request);
        
    }

    public function store(){
        
    }
}
