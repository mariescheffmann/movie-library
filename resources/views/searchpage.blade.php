<x-app-layout>

    <h1 class="ml-4 mt-4 text-white text-3xl">Search results:<h1>
            <div class="flex flex-wrap mt-4 ml-4">

                @if(($searchedMovies)->isEmpty())
                <p class="ml-4 mt-4 text-white text-3xl">No Results</p>


            </div>
            @else

            @foreach ($searchedMovies as $movie)
            <div class="ml-6">
                <div style="mr-4 float:left; width: 100%; height: 100%;">
                    <img class="flex object-cover h-72 min-w-full" src="{{ asset('pictures/' . $movie['imageReference']) }}" alt="movie poster">
                    <div class="mb-6">
                        <h2 class="text-white">{{$movie->title}}</h2>
                        <p class="text-white">{{$movie->descriptionShort}}</p>
                    </div>
                </div>
            </div>
            @endforeach


            @endif



</x-app-layout>
