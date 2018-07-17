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

    public function profilepage(Request $request){
        $userinfo = $request->session()->get('userinfo');
        $data = array(
            'userinfo'=>$userinfo
        );
        return view('admin.profilepage')->with($data);
    }

    public function checklogin(Request $request){
       $Username = $request->input('Username');
       $Password = $request->input('Password');
       //Check Found User
        $UserRecord = Userbase::where('Username',$Username)->where('Password',$Password)->first();
        if(!empty($UserRecord)){
            $request->session()->put('userinfo', $UserRecord);//SESSION
            return redirect('/profile');
        }else{
            return view('admin.loginpage');
        }
//        dd($UserRecord);

    }

}
