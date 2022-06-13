<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

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




}
