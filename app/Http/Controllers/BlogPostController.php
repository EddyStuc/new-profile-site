<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index($slug)
    {
        $postClass = new Post;

        $post = $postClass->getPostData($slug . '.md');

        return view('blog-post', compact('post'));
    }
}
