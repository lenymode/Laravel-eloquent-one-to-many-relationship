<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


// loginpage
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
