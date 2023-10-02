<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function insert(){
        $user = new User();
        $user->name = "leonardo";
        $user->email = "leonardo@gmail.com";
        $user->password = bcrypt("leo1234");
        $user->save();
        return to_route('login');
    }

    public function store(Request $request){
        $verify = Auth::attempt([
            'email'=> $request->input('correo'),
            'password'=> $request->input('clave'),
        ]);

        if ($verify) {
            // accede
            $request->session()->regenerate();
            return redirect()->intended('/dashborad');
        }
        // no accede
        return to_route('login');
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
