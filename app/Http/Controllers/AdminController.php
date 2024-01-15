<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminController extends Controller
{
    public function logout (){
        FacadesAuth::logout();
        return Redirect()-> route('login');
    }
}
