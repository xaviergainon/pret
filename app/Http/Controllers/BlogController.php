<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    public function index (): Paginator {
        return \App\Models\Post::paginate(25);
    }

    public function show (string $slug, string $id): RedirectResponse | Post {
        $post = \App\Models\Post::findOrFail($id);

        return $post;
    }
    
    public function test(){
            return view('wel ');
    }

}

