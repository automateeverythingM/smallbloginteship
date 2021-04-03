@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection
@section('content')
    <div>
        <h1>Create blog</h1>

        <form action="{{route('blog.store')}}" method="post">
            @csrf
                <label class="w-100 my-4">
                    <span class="h3">Title</span>
                    <input class="form-control" type="text" name="title" autocomplete="off" autofocus >
                </label>
                <textarea name="blog_body" id="markdown"></textarea>

                <button class="btn btn-primary font-weight-bold" onClick="passValueToTextArea">Save Blog</button>
        </form>
    </div>
@endsection
@section('js')
<script src="{{asset('js/markdowneditor.js')}}" defer></script>
@endsection
