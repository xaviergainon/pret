<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index (): View {
        return view('blog.index',[
            'posts' => Post::paginate(1)
        ]);
    }

    public function show (string $slug, Post $post): RedirectResponse | View  {

        
        if ($post->slug != $slug) {
           // return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
       

        return view('blog.show',[
            'post' => $post
        ]);
    }
    
    public function test(){
            return view('wel '); 
    }

}

