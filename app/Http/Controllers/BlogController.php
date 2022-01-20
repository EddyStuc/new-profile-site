<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $postClass = new Post;

        $posts = $postClass->getLatest(10);

        return view('blog', compact('posts'));
    }
}
