@forelse ($blogs as $blog )
<div class="position-relative my-2">
    <div class="on_card_buttons">

        @unless ('is-admin')
            <a href={{route('blog.edit', $blog)}} class="btn btn-success rounded-pill my-2"><i class="fa fa-pencil"></i></a>
        @endunless('is-admin')


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
<div class="h3 my-3">No posts</div>
@endforelse
