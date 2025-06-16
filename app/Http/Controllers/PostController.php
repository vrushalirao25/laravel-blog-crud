<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $storePostRequest)
    {
        $postService = new PostService();
        $postService->add(
            $storePostRequest->title,
            Str::slug($storePostRequest->title),
            $storePostRequest->content,
        );
        return redirect()->route('posts')->with('success', 'Profile created successfully.');
    }

    public function index() 
    {
        $postService = new PostService();
        $posts = $postService->getAll();
        return view('posts/listing',['posts' => $posts]);
        //return view('posts.listing',compact('posts'));
        //'posts.index' uses dot notation
        //'posts/listing' uses slash notation
    }
}
