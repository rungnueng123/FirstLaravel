<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbase;

class MyuserController extends Controller
{
   public function registerpage(){
       return view('admin.registerpage');
   }

   public function loginpage(){
       return view('admin.loginpage');
   }

    public function saveregisterpage(Request $request){
        $userbase = new Userbase;
        $userbase->Username = $request->input('Username');
        $userbase->Password = $request->input('Password');
        $userbase->Email = $request->input('Email');
        $userbase->Birth = $request->input('Birth');
        $userbase->Gender = $request->input('Gender');
        $userbase->save();
        return redirect('/login');
    }
}
