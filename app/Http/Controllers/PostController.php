<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        //$categories = Cache::remember('categories', now()->addDays(3), function () {
          //  return category::whereHas('posts', function ($query) {
            //    $query->published();
          //  })->take(10)->get();
        //});

        return view(
            'posts.index',
            [
                'categories' => category::take(10)->get()
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post
            ]
        );
    }
}
