<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogValidation;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('restrict', ['only' => ['edit', 'update', 'store', 'create']]);
    }

    public function index()
    {
        $blogs = Blog::where('status', '=', true)->paginate(10);
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
    public function store(BlogValidation $request)
    {
        $request->validated();

        if ($request->hasFile('blog_hero_img')) {
            $path = Str::of(Storage::putFile('public/images/' . auth()->id() . '/blog_hero_img', $request->file('blog_hero_img')))->remove('public');
        }

        $user = User::find(auth()->id());
        $user->blog()->create([
            'title' => $request->input('title'),
            'blog_body' => $request->input('blog_body'),
            'user_id' => 6,
            'status' => 0,
            'likes' => 0,
            'blog_hero_img' => $path ?? null

        ]);

        $request->session()->flash('success', 'Congratulation!!! You have created blog.');

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
    public function update(BlogValidation $request, Blog $blog)
    {
        $request->validated();


        if ($request->hasFile('blog_hero_img')) {
            $path = Str::of(Storage::putFile('public/images/' . auth()->id() . '/blog_hero_img', $request->file('blog_hero_img')))->remove('public');
        }

        $blog->update([

            'title' => $request->input('title'),
            'blog_body' => $request->input('blog_body'),
            'blog_hero_img' => $path ?? $blog->blog_hero_img
        ]);

        $request->session()->flash('success', 'You have updated blog with id ' . $blog->id);


        return redirect('/blog/' . $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Blog $blog)
    {
        $id = $blog->id;
        $blog->delete();
        $request->session()->flash('success', 'You have deleted blog with id ' . $id);



        if (Gate::allows('is-admin')) return redirect('/admin');

        return redirect('profile');
    }
}
