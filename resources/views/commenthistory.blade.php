
<x-app-layout> <!-- Gets layout for page and header from correct copmponent -->
    <!DOCTYPE html>
    <head>
        <title>CommentHistory</title>
    </head>
    <body>
        <div class="contentsContainer">
            <div class="text-gray-200 dark:text-gray-200 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <x-mockup-comments-array :mockupComments="$mockupComments"/> <!-- Gets comments from component -->
            </div>
        </div>
    </body>
</x-app-layout>

