<div>
    @forelse ($usersList as $user)
        <div class="p-3 my-3 shadow row">
            <div class="w-100">
                {{$user->name}}
            </div>
            <div class="w-100">
                published blogs: {{$user->blog()->where('status' , true)->count()}}
            </div>
            <div>
                pending blogs: {{$user->blog()->where('status' , false)->count()}}
            </div>
        </div>
    @empty

    @endforelse
</div>
