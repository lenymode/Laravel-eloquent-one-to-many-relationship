<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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


            $request->validate([

            'post' =>'required',
            

            ]);

            Post::create ([

            'post' =>$request->post,
            'user_id' => auth()->user()->id, 
    

            ]);
            return redirect()->back();
    }
}
