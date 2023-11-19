<div class="flex flex-row w-500 white-space-nowrap overflow-x-auto p-20 pb-5 pt-5">
    @foreach ($movies as $movie)
    <a class="p-3 flex-shrink-0" href="{{ 'movie/' . $movie['id']}}">
        <img class="flex object-cover h-72 min-w-full" src="{{ asset('pictures/' . $movie['imageReference']) }}" alt="movie poster">
    </a>
    @endforeach
</div>
