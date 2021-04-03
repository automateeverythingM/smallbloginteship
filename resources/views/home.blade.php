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
                    <div class="position-relative my-2">

                        <div class="on_card_buttons">
                            <a href="{{route('blog.edit', 1)}}" class="btn btn-success rounded-pill"><i class="fa fa-pencil"></i></a>
                            <a href="/blog/edit/1" class="card-btn btn btn-danger rounded-pill"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                        <div class="row shadow-sm card-m p-4 rounded w-100">
                            <div class="col-md-2 text-muted display-3 font-weight-bold">04</div>
                            <div class="col-md-8">
                                <div>
                                    <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">Alisa Brends</span>
                                </div>
                                <div class="h3 mt-3">
                                    Captivate Your Community with Stage Channels
                                </div>
                                <div class="text-muted">
                                    Aug 3 * 5 min read
                                </div>
                            </div>
                        </div>

                        <div class="position-relative my-2">

                            <div class="on_card_buttons">
                            <button class="btn btn-success rounded-pill"><i class="fa fa-pencil"></i></button>
                            <button class="card-btn btn btn-danger rounded-pill"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                            <div class="row shadow-sm card-m p-4 rounded w-100">
                                <div class="col-sm-2 text-muted display-3 font-weight-bold">04</div>
                                <div class="col-sm-8">
                                    <div>
                                        <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">Alisa Brends</span>
                                    </div>
                                    <div class="h3 mt-3">
                                        Captivate Your Community with Stage Channels
                                    </div>
                                    <div class="text-muted">
                                        Aug 3 * 5 min read
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>

            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
</div>
@endsection
