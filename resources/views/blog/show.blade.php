@extends('layouts.app')

@section('content')

<div>

    @if(Gate::allows('is-admin') && $blog->status == false)
        <form action="{{route('admin.update', $blog->id)}}" method="post">
            @csrf
            @method('put')
            <button class="btn btn-warning w-100 text-white font-weight-bold shadow"type="submit">Publish &#10004;</button>
        </form>
    @endif

    <div class="mb-5">
        <h1>{{$blog->title}}</h1>
        <hr>
    </div>

    @if ($blog->blog_hero_img)

    <div class="text-center mb-5">
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
