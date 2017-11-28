<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;
use Session;
use Auth;

class AdminController extends Controller
{
    public function getIndex(){
    	return view('myadmin.index');
    }
    
    public function getLogin(){
        return view('myadmin.adminuser.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
             'email'   => 'required|email',
             'password' =>  'required'
        ]);
        
        $email     = $request->email;
        $password  = $request->password;
       
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
           
            return redirect()->route('admin.index');
        }
        Session::flash('loginerror','Email Or Password Is Incorrect');
        return redirect()->back();
            
    }
    public function getLogOut(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function getAdminProfile(){
         return view('myadmin.adminuser.adminprofile');
    }
    public function postChangeAdminEmail(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'newemail' => 'required|email'
        ]);
        
        $adminid = Auth::user()->id;
        $getadmin = AdminUser::find($adminid);
        if($getadmin->email != $request->email){
        Session::flash('profileerror','Ooops!! This Email Is Not Logged Email....');
            return redirect()->back();
        }else{
            $getadmin->email = $request->newemail;
            
        }
        $getadmin->save();
        Session::flash('adsuccess','Email Changed Successfully....');
        return redirect()->back();

    }
    public function postChangePassword(Request $request){
        $this->validate($request,[
            'oldpassword'       => 'required',
            'password'    => 'required|confirmed',
            'password_confirmation' => 'sometimes|required_with:password'
        ]);
        $ademail = Auth::user()->email;
        $adminid = Auth::user()->id;
        $getadmin = AdminUser::find($adminid);
        $password = $request->oldpassword;
        if(Auth::attempt(['email'=>$ademail,'password'=>$password])){
           
           $getadmin->password = bcrypt($request->password);
           $getadmin->retype_password = bcrypt($request->password_confirmation);
            
        }else{
           Session::flash('profileerror','Ooops!! Previous Password Is Not Correct..');
            return redirect()->back();
        }
        $getadmin->save();
        Session::flash('adsuccess','Password Changed Successfully....');
        Auth::logout();
        return redirect()->back();
    }
}
 