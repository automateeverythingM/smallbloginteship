@extends('layouts.app')
@section("content")

    <header class="">
        <div class="w-100 text-center row align-items-center flex-column px-5">
            <h1 class="d-block">Create you blog</h1>
            <h4>Notify people about your new blog</h4>

        </div>
        <hr>
    </header>
    <section class="py-4">
        <h3 class="text-muted">Fully customizable blog</h3>
        <h4 class="text-muted text-right h5">{{now()}}</h4>
        <div class="position-relative d-flex align-items-center justify-content-center">
            <picture>
                <source media="(max-width:765px)" srcset="{{asset('img/desktop-2325627_640.jpg')}}">
                <img class="w-100" src="{{asset('img/desktop-2325627_1920.jpg')}}" alt="Blog representation" >
              </picture>
              <div class="position-absolute text-center">
                  <h3 class="display-4">Where to find good ideas</h3>
                  <h5 class="h2">and no, its not google...<span class="h2">&#128516;</span></h5>
                  <div>by Loren</div>

              </div>
        </div>
    </section>
            <div class="font-weight-bold mb-3" style="font-size:1.6rem;"><img src="{{asset('img/icons/graph.svg')}}" alt=""> Trending blog posts</div>
            @forelse ($blogs as $blog )
            <x-blog-card :index="$loop->index +1" :blog="$blog"/>
            @empty
            <p class="h3 text-center">No posts</p>
            @endforelse
            <a class="btn btn-secondary w-100 font-weight-bold mt-3 " href="{{route('blog.index')}}" style="font-size:1.6rem;">See all</a>
        </div>

    </section>

@endsection
