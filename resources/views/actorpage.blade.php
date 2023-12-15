<!DOCTYPE html>

<?php
$decodedActor = json_decode($actor);
?>

<x-app-layout>
<html>
    <body >
        <div style="float:left; width: 50%" class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
            <section id="actorInfo" style="margin-top: 15px;">
                <div style="float:left; margin-right: 15px;">
                    <img class="flex object-cover h-72 min-w-full" src="{{ asset('pictures/' . $decodedActor->{'imageReference'}) }}">
                </div>
            </section>
            <section id="biography" style="margin-top: 15px;">
                <h1 style="font-size:1.25em;font-weight:bold; margin-top: 15px;"> {{ $decodedActor->{'name'}; }}</h1>
                <div> {{$decodedActor->{'birthday'}; }} </div>
                <div> {{$decodedActor->{'nationality'}; }} </div>
                <h1 style="font-size:1.25em;font-weight:bold; margin-top: 15px;">Biography</h1>
                <div> {{ $decodedActor->{'biography'}; }} </div>
            </section>
        </div>
        <div style="float: right; width: 50%" class="vl; text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
             <div style="margin-top: 15px; width: 100%"> {{ $decodedActor->{'name'}; }} appears in: 
                <?php foreach ($movies[0] as &$value): ?>
                    <div style="margin-top: 15px; width: 100%;">
                        <div style="float:left; width: 100%;">
                            <img style="float:left; margin-bottom:15px;" width="120px" height="120px" src="{{ asset('pictures/' . $value['imageReference']) }}"/>
                            <div style="font-weight:bold;">{{ $value["title"]; }}</div>
                            <div>Duration: {{ $value["duration"]; }}</div>
                            <div>Release year: {{ $value["releaseYear"];}}</div>
                            <div>{{ $value["descriptionShort"];}}</div>
                        </div>
                    
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>
</x-app-layout>

