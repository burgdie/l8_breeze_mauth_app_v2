<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConstructionController extends Controller
{
    public function index(Request $request){

      $email = ('user@rm.test');
      $password = Hash::make('regiomahl_2022');

      // dd('ConstructionController called', $email, $password, $request);
      
       return view('construction.login');

    }
}
