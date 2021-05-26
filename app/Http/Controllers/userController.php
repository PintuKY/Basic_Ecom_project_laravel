<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function logins(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->pass, $user->password))
        {
            return "password dos not match";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/product');
        }
    }

    public function register(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->pass);
        $user->save();
        return redirect('/login');

    }
}
