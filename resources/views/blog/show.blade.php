@extends('layouts.app')

@section('content')

<div>


    <h1>{{$blog->title}}</h1>
    <hr>
    <div id="blog_body" data-blog="{{$blog->blog_body}}">

    </div>
</div>

@endsection

@section('js')
<script src="{{asset('js/markdownPreview.js')}}"></script>
@endsection
