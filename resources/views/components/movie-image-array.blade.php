<div class="movies flex flex-row w-500 white-space-nowrap overflow-x-auto p-20 pb-5 pt-5">
    @foreach ($movies as $movie)
    <a class="p-3 flex-shrink-0" href="{{ asset($movie['name']) }}"><img class="flex object-cover h-72" src="{{ asset('pictures/' . $movie['image_link']) }}" alt="movie poster"></a>
    @endforeach
</div>
