<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function signup(Request $request){
        // return dd($request->all());  
        //save all the values to the database
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password
        ]);

    }
}
