@extends('layouts.app')

@section('content')
   <h1 class="mb-5 text-center">Scroll through our blogs</h1>
    @forelse ($blogs as $blog)
        <x-blog-card :index="$loop->index +1" :blog="$blog"/>
    @empty
        <div class="h3 my-3">No posts</div>
    @endforelse

    {{$blogs->links()}}
@endsection
