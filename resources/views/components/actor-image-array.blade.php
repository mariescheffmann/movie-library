<?php
use App\Models\Actor;

$actors = Actor::all()->toArray();


//$images = array("movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg","movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg", "movie-posters/Dracula_movie_poster_Style_F.jpg" );

foreach ($actors as $actor) {
    $image = $actor['image_link'];
    $name = $actor['name'];
    echo '<a class="p-3 flex-shrink-0" href="' . asset($name) . '"><img class="flex object-cover h-[300px]" src="' . asset('pictures/' . $image) . '" alt="movie poster"></a>';
}
?>
