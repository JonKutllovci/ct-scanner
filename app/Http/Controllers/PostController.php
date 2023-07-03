<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PostController extends Controller
{
    public function index()
    {
        $posts = News::all();

        return view('blog-news.news', compact('posts'));
    }

    /**
     *
     * returns the view posts-add-new.blade
     *
     **/
    // public function addNew()
    // {
    //     return view('posts-add-new');
    // }

    /**
     * stores them and redirects to posts
     */
    public function store(Request $request)
    {
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'image_url' => $request->image_url
        ]);

        return redirect('posts');
    }

    // public function show(News $id)
    // {
    //     return view('post-single', ['post' => $id]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, News $post)
    // {
    //     $post->update([
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'body' => $request->body,
    //         'image_url' => $request->image_url
    //     ]);

    //     return redirect('posts');
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(News $post)
    // {
    //     $post->delete();

    //     return redirect('posts');
    // }

    /**
     * returns posts-edit.blade with all the post information
     */
    // public function edit(News $post)
    // {
    //     return view('posts-edit', ['post' => $post]);
    // }
}
