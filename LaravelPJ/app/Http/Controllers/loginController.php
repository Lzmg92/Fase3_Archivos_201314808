<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class loginController extends Controller
{
    public function login(Request $req){
    	$username = $req->input('nombre');
    	$password = $req->input('contra');
    	echo $username;
    }
}