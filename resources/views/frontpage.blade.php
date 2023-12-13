
<x-app-layout>
    <!DOCTYPE html>
    <head>
        <title>Frontpage</title>
    </head>
    <body>
        <div class="contentsContainer">
            <div class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
                Top movies:
            </div>
            <x-movie-image-array :movies="$movies" />
            <div class="actors">
                <div class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
                    People:
                </div>
                <x-actor-image-array :actors="$actors" />
            </div>
        </div>
    </body>
</x-app-layout>

