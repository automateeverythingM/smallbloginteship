@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href='{{asset('css/index.css')}}'>
@endsection
@section('content')
<div class="container">

        <div>
            <h1>Profile</h1>
            <hr>

            <a href="{{route('blog.create')}}" class="btn btn-primary font-weight-bold">Create new Blog</a>

            <div class="py-5">
                <h3>Your posts</h3>

                <div>
                    @forelse ($blogs as $blog)


                        <div class="position-relative my-2">
                            <div class="on_card_buttons">

                                    <a href={{route('blog.edit', $blog)}} class="btn btn-success rounded-pill my-2"><i class="fa fa-pencil"></i></a>

                                <form action="{{route('blog.destroy', $blog)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="card-btn btn btn-danger rounded-pill"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <x-blog-card :index="$loop->index +1" :blog="$blog"/>
                            <div class=" text-white text-center {{$blog->status == 0 ? "bg-warning" : "bg-sucess"}}">{{$blog->status == 0 ? "pending approval": "published"}}</div>
                        </div>
                    @empty
                    <p class="h3 text-center">No posts</p>
                    @endforelse
                </div>
        </div>
</div>
@endsection
