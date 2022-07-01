<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function home()
 {
      return view ('auth.login');
 }

  //  homepage

 public function landingpage()

 {  
      $comments=Post::latest()->get();
      
      return view('home',compact('comments'));
  
 }

 public function usershow()
 {
     $users = User::get();
      
     return view('user',compact('users'));
 }

// block-user 
 public function block (User $user)
 {
 $user->update([
     'is_verified' => '1',
 ]);
 return redirect()->back();
 }

//  unblock-user 

public function unblock(User $user)
{
    $user->update(['is_verified' => '0',]);
    return redirect()->back ();
}

//  create_new_user

// public function storenew(Request $request)
// {
//     $request->validate([
//         'name' => ['required', 'string', 'max:255'],
//         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//         'password' => ['required', 'confirmed', Rules\Password::defaults()],
//     ]);

//     $user = User::create([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//     ]);

//     event(new Registered($user));

    

//     return redirect()->back();
// }

// newuserblade

public function newuser()
{
    return view('newuser');
}
// delete,user,

public function delete (User $user)
{
$user->delete();
return redirect()->back();
}

}
