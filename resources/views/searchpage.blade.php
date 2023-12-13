<x-app-layout>

    <form action="{{route('searchMovies') }}" method="GET">
        <input type="text" name="movieName" placeholder="Search for movies">
        <button type="submit">Search</button>
    </form>

    @foreach ($searchedMovies as $movie)
    <div>
        <h2>{{$movie->title}}</h2>
        <p>{{$movie->descriptionShort}}</p>
    </div>
    @endforeach

</x-app-layout>
