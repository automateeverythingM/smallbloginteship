@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection
@section('content')
    <div>
        <h1>Edit blog</h1>

        <form action="{{route('blog.update', $blog)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="@error('blog_hero_img') is-invalid @enderror">
                    <input   type="file" name="blog_hero_img" accept="image/png, image/jpeg, image/jpg">
                </div>
            @error('blog_hero_img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            <label class="w-100 my-4">
                <span class="h3">Title</span>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" autocomplete="off" autofocus value="{{$blog->title}}" >
            </label>
            @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
                <textarea name="blog_body" id="markdown" data-blog='{{$blog->blog_body}}'></textarea>

                <button class="btn btn-primary font-weight-bold" onClick="passValueToTextArea">Save Blog</button>
        </form>
    </div>
@endsection
@section('js')
<script src="{{asset('js/markdowneditor.js')}}" defer></script>
@endsection
