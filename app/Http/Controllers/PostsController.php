<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Post as Post;
use Carbon\Carbon;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $posts = Post::query()->where('published_at', '<=', Carbon::now())->get()->reverse();

        return view('posts.index')->with('posts', $posts);
    }

    /**
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::query()->findOrFail($id);

        return view('posts.show')->with('post', $post);
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::query()->findOrFail($id);

        return view('posts.edit')->with('post', $post);
    }

    /**
     * @param $id
     * @param PostRequest $request
     * @return Response
     */
    public function update($id, PostRequest $request)
    {
        $post = Post::query()->findOrFail($id);
        $post->update($request->all());

        return redirect('posts');
    }

    /**
     * @param PostRequest $request
     * @return \Response
     */
    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return redirect('posts');
    }
}
