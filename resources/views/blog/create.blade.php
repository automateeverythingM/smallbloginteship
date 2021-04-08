@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection
@section('content')
    <div>
        <h1>Create blog</h1>

        <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                        <div class="@error('blog_hero_img') is-invalid @enderror">
                            <input   type="file" name="blog_hero_img" accept="image/png, image/jpeg, image/jpg">
                        </div>
                        @error('blog_hero_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    <div class="@error('title') is-invalid @enderror">

                        <label class="w-100 my-4">
                            <span class="h3">Title</span>
                            <input  class="form-control mb-0 @error('title') is-invalid @enderror" type="text" name="title" autocomplete="off" autofocus value="{{ old('title') }}" >
                        </label>
                    </div>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="@error('blog_body') is-invalid @enderror" >
                        <textarea name="blog_body" id="markdown"  data-blog='{{old('blog_body')}}'></textarea>
                    </div>
                    @error('blog_body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <button class="btn btn-primary font-weight-bold" onClick="passValueToTextArea">Save Blog</button>
        </form>

    </div>
@endsection
@section('js')
<script src="{{asset('js/markdowneditor.js')}}" defer></script>
@endsection
