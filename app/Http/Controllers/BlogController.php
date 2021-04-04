<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $blogs = Blog::where('status', '=', true)->get();
        return view('blog.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //          //Handle file upload
        //         if ($request->hasFile('cover_image')){
        //             $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //             //Get just filename
        //             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //             //Get just extension
        //             $extension = $request->file('cover_image')->getClientOriginalExtension();
        //             //Filename to store
        //             $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //             $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        //         } else {
        //             $fileNameToStore='noimage.jpg';
        //         }
        // $post->cover_image = $fileNameToStore;
        //

        $user = User::find(auth()->id());
        //        dd($user);
        $user->blog()->create([
            'title' => $request->input('title'),
            'blog_body' => $request->input('blog_body'),
            'user_id' => 6,
            'status' => 0,
            'likes' => 0
        ]);


        return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show')->with('blog', $blog);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update([
            'title' => $request->input('title'),
            'blog_body' => $request->input('blog_body')
        ]);

        return redirect('/blog/' . $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('profile');
    }
}
