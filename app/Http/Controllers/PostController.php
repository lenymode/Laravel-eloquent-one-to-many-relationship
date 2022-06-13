<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Auth;

class PostController extends Controller
{
    // public function add_post($id)
    // {
    //     // $author = Author::find($id);
    //     // $post = new Post();
    //     // $post->title = 'Title 1';
    //     // $author->post()->save($post);
        
    // }
        




    public function add_post(Request $request)
    {
        // if(!Auth::check()){
        //     return back()->with('error','Authentication required')
        // }
            $request->validate([

            'post' =>'required',
            

            ]);

            Post::create ([

            'post' =>$request->post,
            'user_id' => auth()->user()->id, 
    

            ]);
            return redirect()->back();
    }
    public function add_post2(Request $request)
    {
        

            $request->validate([

            'post' =>'required',
            

            ]);

            Post::create ([

            'post' =>$request->post,
            'user_id' => auth()->user()->id
    

            ]);
            return redirect()->back();
            
            
    }


    
    public function __construct(){
        $this->middleware('auth');
    }

    
}
