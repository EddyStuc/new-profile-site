<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $postClass = new Post;

        $posts = $postClass->getLatest(5);

        return view('blog', compact('posts'));
    }
}
