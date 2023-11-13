
<x-app-layout> <!-- Gets layout for page and header from correct copmponent -->
    <!DOCTYPE html>
    <head>
        <title>CommentHistory</title>
    </head>
    <body>
        <div class="contentsContainer">
            <div class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
                <x-mockup-comments-array :mockupComments="$mockupComments"/> <!-- Gets comments from component -->
            </div>
            <!-- <div class="actors">
                <div class="text-gray-200 dark:text-gray-200 pt-10 pl-20 text-2xl">
                    Actors:
                </div>
                <div class="movies flex flex-row w-500 white-space-nowrap overflow-x-auto p-20 pb-5 pt-5">
                </div>
            </div> -->
        </div>
    </body>
</x-app-layout>

