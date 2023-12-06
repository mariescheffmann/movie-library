<!DOCTYPE html>

<?php 
    use App\Http\Controllers\MoviepageController;
?> 

<x-app-layout>
<html>
    <body >
        <div style="float:left; width: 50%" class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
            <section id="movieInfo" style="margin-top: 15px;">
                <div style="float:left; width: 50%; height: 100%;">
                <img class="flex object-cover h-72 min-w-full" src="{{ asset('pictures/' . $movie['imageReference']) }}" alt="movie poster">
                </div>
                <div >
                    
                    <div style="font-size:1.25em;font-weight:bold;">
                    <div> {{ $movie['title'] }}</div>
                    </div>
                    <div> {{ $movie['duration'] }} </div>
                    <div> {{ $movie['releaseYear']}} </div>
            </section>
            <section id="biography" style="margin-top: 15px;">
                <h1 style="font-size:1.25em;font-weight:bold;">Biography</h1>
                <div> {{$movie['descriptionShort']}} </div>
            </section>
        <br><br><br><br>

        <?php
        if(isset($_GET['submit'])){
            MoviepageController::insertComment($id, $_GET['comment']);
        } 
        ?>

        <form method="get">
            <label for="coment">Join the discussion</label>
            <br>
            <input id="comment" name="comment" type="text" placeholder="Comment" size="60%">
            <input type="submit" name="submit" value="Submit">
        </form>

        </div>
        
        <div style="float: right; width: 50%" class="vl; text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">

            <?php
                echo '<div class="my_class" style="margin-top: 15px; width: 100%"> Directors:';
                foreach ($directors as &$value) {
                    echo '<div style="width: 100%" class="my_class" style="margin-top: 15px;">';
                    $director = $value[0];

                    echo '<div class="my_class" style="float:left; width: 100%"> ';
                    echo '<img style="float:left; margin-bottom:15px;" width="120px" height="120px"/>'; 
                    echo '<div style="font-weight:bold;">' .  $director["name"] . '</div>';
                    echo '<div>' . 'Birthday: ' . $director["birthday"]. '</div>';
                    echo '<div>' . $director["nationality"]. '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                }
                echo '</div>';

                echo '<div class="my_class" style="margin-top: 15px width: 100%;"> Producers: </div>';
                foreach ($producers as &$value) {
                    echo '<div class="my_class" style="margin-top: 15px;">';
                    $producer = $value[0];

                    echo '<div class="my_class" style="float:left; width: 50100%"> ';
                    echo '<img style="float:left; margin-bottom:15px;" width="120px" height="120px"/>'; 
                    echo '<div style="font-weight:bold;">' .  $producer["name"] . '</div>';
                    echo '<div>' . 'Birthday: ' . $producer["birthday"]. '</div>';
                    echo '<div>' . $producer["nationality"]. '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                }

                echo '<div class="my_class" style="margin-top: 15px;"> Actors: </div>';
                foreach ($actors as &$value) {
                    echo '<div class="my_class" style="margin-top: 15px;">';
                    $actor = $value[0];

                    echo '<div class="my_class" style="float:left; width: 100%"> ';
                    echo '<img style="float:left; margin-bottom:15px;" src="buttonpng" width="120px" height="120px"/>'; 
                    echo '<div style="font-weight:bold;">' .  $actor["name"] . '</div>';
                    echo '<div>' . 'Birthday: ' . $actor["birthday"]. '</div>';
                    echo '<div>' . $actor["nationality"]. '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                }
            ?>
        </div>
    </body>
</html>
</x-app-layout>

