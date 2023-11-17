<div class="mockupComments flex-col m-8">
    @foreach ($mockupComments as $comment)
    <div class = "m-8"> <!-- Contains each comment -->
        <div class = "flex text-xl"> <!-- Contains which movie (with rating?) the comment has been made on and timetamp -->
            <h3 class = "pr-8">Movie</h3>
            <h4>Timestamp</h4>
        </div>
        <div class = "p-6 box-border h-auto w-auto p-4 border-2 bg-gray-200">
            <p class = "text-gray-700 text-xl">{{ $comment['content'] }}</p>
        </div>
        <div>
            <button class = "bg-purple-theme hover:bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2">Delete</button> <!-- Contains delete button -->
        </div>
    </div>
    
    @endforeach
</div>