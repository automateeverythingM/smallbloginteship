
<a href="{{route('blog.show', $blog->id)}}" class="row shadow-sm card-m p-4 rounded">
    <div class="col-sm-2 text-muted display-3 font-weight-bold mx-3">{{$index}}</div>
    <div class="col-sm-9">
        <div>
            <img src="{{asset('img/icons/avatar.svg')}}" alt=""><span class="font-weight-bold">{{$blog->user->name}}</span>
        </div>
        <div class="h3 mt-3">
           {{$blog->title}}
        </div>
        <div class="d-flex">
            <div class="text-muted">
                Aug 3 * 5 min read
            </div>
            <span class="ml-2">
                <span>{{$blog->likes}}</span>
                    <i class="fa fa-heart text-danger" aria-hidden="true"></i>
            </span>
            <span class="ml-2">
                <span>4</span>
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</a>
