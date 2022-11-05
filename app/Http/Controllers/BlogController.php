<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller{
    public function blog(){
        return view('blog', ['content' => Blog::all()]);
    }

    public function found($slug){
        return view('single', ['arr' => Blog::traverse($slug)]);
    }

}


