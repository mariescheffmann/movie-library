<!DOCTYPE html>

<?php
$decodedActor = json_decode($actor);
?>

<x-app-layout>
<html>
    <body >
        <div style="float:left; width: 50%" class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
            <section id="actorInfo" style="margin-top: 15px;">
                <div style="float:left; width: 50%; height: 100%;">
                <img class="flex object-cover h-72 min-w-full" src="{{ asset('pictures/' . $actor['imageReference']) }}" alt="movie poster">
                </div>
                <div >
                    
                    <div style="font-size:1.25em;font-weight:bold;">
                    <?php
                        echo $decodedActor->{'name'};
                    ?>
                    </div>
                    <div>
                    <?php
                        echo $decodedActor->{'birthday'}
                    ?>
                    </div>
                    <div><?php
                        echo 'nationality';
                    ?></div>
            </section>
            <section id="biography" style="margin-top: 15px;">
                <h1 style="font-size:1.25em;font-weight:bold;">Biography</h1>
                <div> <?php
                        echo $decodedActor->{'biography'}
                    ?> </div>
            </section>
        </div>
        <div class="vl; text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
            <?php
                foreach ($movies[1] as &$value) {
                    echo '<div class="my_class" style="margin-top: 15px;">';


                    echo '<div class="my_class" style="float:left; width: 50%"> ';
                    echo '<img style="float:left; margin-bottom:15px;" src="buttonpng" width="120px" height="120px"/>'; 
                    echo '<div style="font-weight:bold;">' .  $value["title"] . '</div>';
                    echo '<div>' . 'Duration: ' . $value["duration"]. '</div>';
                    echo '<div>' . 'Release year: ' . $value["releaseYear"]. '</div>';
                    echo '<div>' . $value["descriptionShort"]. '</div>';
                    echo '</div>';
                    
                    echo '</div>';
                }
            ?>
        </div>
    </body>
</html>
</x-app-layout>

