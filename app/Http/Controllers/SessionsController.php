<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SessionsController extends Controller
{
    public function create(){
        return view('/login');
    }

    public function store(Request $request){
        if(auth()->attempt(request(['email','password'])) == false ){
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);
        } 
        return redirect()->to('/index');
    }
}
