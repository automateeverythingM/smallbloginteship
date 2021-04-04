@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection
@section('content')
    <div>
        <h1>Edit blog</h1>

        <form action="{{route('blog.update', $blog)}}" method="post">
            @csrf
            @method('put')
                <label class="w-100 my-4">
                    <span class="h3">Title</span>
                    <input class="form-control" type="text" name="title" autocomplete="off" autofocus value="{{$blog->title}}" >
                </label>
                <textarea name="blog_body" id="markdown" data-blog='{{$blog->blog_body}}'></textarea>

                <button class="btn btn-primary font-weight-bold" onClick="passValueToTextArea">Save Blog</button>
        </form>
    </div>
@endsection
@section('js')
<script src="{{asset('js/markdowneditor.js')}}" defer></script>
@endsection
