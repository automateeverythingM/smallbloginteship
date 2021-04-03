@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href='{{asset('css/index.css')}}'>
@endsection
@section("content")

    <header class="">
        <div class="w-100 text-center row align-items-center flex-column px-5">
            <h1 class="d-block">Create you blog</h1>
            <h4>Notify people about you new blog</h4>

        </div>
        <hr>
    </header>
    <section class="py-4">
        <h3 class="text-muted">Fully customizble blog</h3>
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

    <section class="mt-4">
        <div class="font-weight-bold" style="font-size:1.6rem;"><img src="{{asset('img/icons/graph.svg')}}" alt=""> Trending blog posts</div>
        <div class="pt-4">

                <div class="row shadow-sm card-m p-4 rounded ">
                    <div class="text-muted display-3 font-weight-bold col-sm-2">01</div>
                    <div class="col-sm-9">
                        <div>
                            <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">Alisa Brends</span>
                    </div>
                    <div class="h3 mt-3">
                        The Clubhouse clones are coming
                    </div>
                    <div class="d-flex">
                        <div class="text-muted mr-1">
                            Apr 1 * 9 min read
                        </div>
                            <span class="ml-2">
                                <span>312</span>
                                    <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                            </span>
                            <span class="ml-2">
                                <span>12</span>
                                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                            </span>
                    </div>
                </div>
            </div>
        </div>
            <div class="row shadow-sm card-m p-4 rounded">
                <div class="col-sm-2 text-muted display-3 font-weight-bold mx-3">02</div>
                <div class="col-sm-9">
                    <div>
                        <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">Alisa Brends</span>
                    </div>
                    <div class="h3 mt-3">
                        Three Things in Life That Aren’t Worth The Effort
                    </div>
                    <div class="d-flex">
                        <div class="text-muted">
                            Apr 6 * 9 min read
                        </div>
                            <span class="ml-2">
                                <span>218</span>
                                    <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                            </span>
                            <span class="ml-2">
                                <span>12</span>
                                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                            </span>
                    </div>
                </div>
            </div>
            <div class="row shadow-sm card-m p-4 rounded">
                <div class="col-sm-2 text-muted display-3 font-weight-bold mx-3">03</div>
                <div class="col-sm-9">
                    <div>
                        <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">Alisa Brends</span>
                    </div>
                    <div class="h3 mt-3">
                        5 Gentle Wisdoms That Make Life3
                    </div>
                    <div class="d-flex">
                        <div class="text-muted">
                            May 15 * 15 min read
                        </div>
                        <span class="ml-2">
                            <span>50</span>
                                <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                        </span>
                        <span class="ml-2">
                            <span>7</span>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>

            </div>
            <div class="row shadow-sm card-m p-4 rounded">
                <div class="col-sm-2 text-muted display-3 font-weight-bold mx-3">04</div>
                <div class="col-sm-9">
                    <div>
                        <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">Alisa Brends</span>
                    </div>
                    <div class="h3 mt-3">
                        Captivate Your Community with Stage Channels
                    </div>
                    <div class="d-flex">
                        <div class="text-muted">
                            Aug 3 * 5 min read
                        </div>
                        <span class="ml-2">
                            <span>112</span>
                                <i class="fa fa-heart text-danger" aria-hidden="true"></i>
                        </span>
                        <span class="ml-2">
                            <span>4</span>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>

            <a class="btn btn-secondary w-100 font-weight-bold mt-3 " href="{{route('blog.index')}}" style="font-size:1.6rem;">See all</a>
        </div>

    </section>

@endsection
