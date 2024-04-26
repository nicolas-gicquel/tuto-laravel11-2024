<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable||string',
            'tags' => 'nullable||string',
          ]);

          Post::create([
            'content' => $request->content,
            'tags' => $request['tags'],
            'image' => $request->input('image'),
            'user_id' => Auth::user()->id
        ]);
        
          return redirect()->route('home')
            ->with('success', 'Post crée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if (Auth::user()->id == $post->user_id) {
            return view('post.edit', compact('post'));
        } else {
            return redirect()->route('home')->withErrors(['erreur' => 'Vous n\'êtes pas autorisé à modifier ce post']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|max:255',
            'image' => 'nullable||string',
            'tags' => 'nullable||string',
          ]);
       
          $post->update($request->all());

          return redirect()->route('home')->with('message', 'Le post a bien été modifié.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (Auth::user()->id == $post->user_id) {
            $post->delete();
            return redirect()->route('home')->with('message', 'Le post a bien été supprimé');
        } else {
            return redirect()->back()->withErrors(['erreur' => 'Suppression du post impossible']);
        }
    }
}
