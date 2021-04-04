@extends('layouts.app')

@section('content')

<div>


    <h1>{{$blog->title}}</h1>
    <hr>

    @if ($blog->blog_hero_img)

    <div class="text-center">
         <img class="w-50" src="{{str_contains($blog->blog_hero_img, 'blog_hero_img')? asset('storage/' . $blog->blog_hero_img ): $blog->blog_hero_img }}" alt="blog hero">
    </div>
        @endif
        <div id="blog_body" data-blog="{{$blog->blog_body}}">

    </div>
</div>

@endsection

@section('js')
<script src="{{asset('js/markdownPreview.js')}}"></script>
@endsection
