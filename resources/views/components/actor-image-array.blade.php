<div class="movies flex flex-row w-500 white-space-nowrap overflow-x-auto p-20 pb-5 pt-5">
    @foreach ($actors as $actor)
    <a class="p-3 flex-shrink-0" href="{{ 'actor/' . $actor['id'] }}">
        <img class="flex object-cover h-72" src="{{ asset('pictures/' . $actor['imageReference']) }}" alt="movie poster">
    </a>
    @endforeach
</div>
