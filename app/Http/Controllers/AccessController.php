<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccessController extends Controller
{
    public function __construct(){
      $access_data = Access::firstOrCreate(
        [
          'access_email' => 'test@test.de',
          'access_password' => Hash::make('password'),

        ]);
         //dd($access_data);
    }

    public function access(Request $request) {

      $verify_access = Access::where('access_email', '=' , 'test@test.de')->first();


      if($verify_access->access_email == $request->email){

       // dd( $request->password,  $verify_access->access_password);

        if(Hash::check($request->password, $verify_access->access_password)) {

          return view('main.index');
        } else {
           
          return 'Login Data is not correct-> Access not allowed';
        };
      }


    }
}
