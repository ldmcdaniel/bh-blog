<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Parsedown;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function __construct()
    {
        
    } 
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }


    public function create()
    {
        return view('posts.create');
    }

    protected $post;

    public function store(Requests\StorePostRequest $request, Parsedown $parsedown)
    {
        Post::create([
            'title' => $request->title(),
            'body' => $parsedown->text($request->body()),
        ]);

        return redirect()->action('PostsController@index');
    }
}
