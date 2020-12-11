<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function Index(Request $request)
    {
        $categories=Category::query()->get();
        $posts=Post::query()->get();
        $tags=Tag::query()->get();

        return view('index',['categories'=>$categories,'posts'=>$posts,'tags'=>$tags]);

    }
    public function  AddPost(Request $request)
    {
        $categories=Category::query()->get();

        $tags=Tag::query()->get();
        return view('addPost',['categories'=>$categories,'tags'=>$tags]);

    }
    public function  ShowPost($id)
    {

        $post=Post::query()->find($id);
        return view('showPost',['post'=>$post]);

    }
}
