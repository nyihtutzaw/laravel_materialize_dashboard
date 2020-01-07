<?php

namespace App\Http\Controllers;
use App\Misc\Validatable;
use App\Misc\AuthUser;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    use Validatable;
    use AuthUser;
    public function index(Request $request)
    {
        return view('login.index');
    }

    public function save(Request $request)
    {
        $admin=new Admin;
        $admin->username="admin@gmail.com";
        $admin->password=bcrypt("alliswell");
        $admin->save();
    }

    public function login(Request $request)
    {
              $validationRules=[ 
                    'username' => 'required', 'password' => 'required',
              ];
             $this->validateInput($validationRules,$request);
            
             $admin=Admin::where("username",$request->username)->first();
             if ($admin)
             {
                if (Hash::check($request->password, $admin->password))
                {
                    $this->setAuthUser($admin,"admin");
                    return redirect("/home/index");
                }
                else 
                {
                      return back()->with("error","Login failed");
                }
             }
             else 
             {
                 return back()->with("error","Login failed");
             }

    }

     public function logout(Request $request) {
        $this->forgetAuthUser("admin");
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect("/");
    }
}
