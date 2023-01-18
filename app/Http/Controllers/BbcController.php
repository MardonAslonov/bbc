<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Human;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BbcController extends Controller
{
    public function userTable(LoginRequest $request){
        // $user = User::where('email',$request->email)->first();
        // dd($request->password);
        $credentials =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
            if(Auth::attempt($credentials)){
              // $request->session()->regenerate();
              $users=User::orderByDesc('created_at')->paginate(10);


              return view('users.users',[
                  'users'=>$users

              ]);
            }else{
                return redirect()->back();
            }

        // if(Auth::attempt($credentials)){
        // }else{
        // }
    }

    public function peopleTable()
    {
        $users = User::orderByDesc('created_at')->paginate(20);
        return view('users.users',[
        'users' => $users
        ]);
    }

    public function userCreate()
    {
        return view('users.create'
        );
    }

    public function createInfo(Request $request)
    {

        $user = new User();
        $user -> name = $request['name'];
        $user -> email = $request['email'];
        $user -> password = bcrypt($request['password']);
        $user -> save();

        return redirect() -> route('peopleTable');

    }

}

