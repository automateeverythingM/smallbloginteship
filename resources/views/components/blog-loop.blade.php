@forelse ($blogs as $blog )
    <x-blog-card :index="$loop->index +1" :blog="$blog"/>
@empty
<div class="h3 my-3">No posts</div>
@endforelse
