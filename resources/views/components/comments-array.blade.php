<div class="mockupComments flex-col m-8">
    @foreach ($comments as $comment)
    <div class = "m-8"> <!-- Contains each comment -->
        <div class = "flex text-xl"> <!-- Contains which movie (with rating?) the comment has been made on and timetamp -->
            <h3 class = "pr-8">{{ $comment->movie->title }}</h3>
            <h4>{{ $comment->created_at }}</h4>
        </div>
        <div class = "p-6 box-border h-auto w-auto p-4 border-2 bg-gray-200 rounded">
            <p class = "text-gray-700 text-xl">{{ $comment->comment }}</p>
        </div>
        <div class="flex"> <!-- Button container -->
            <div> <!-- activate update functionality button - NOT IMPLEMENTED -->
                <button id="updateButton" class="!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2 mr-4">Update</button>
            </div>
            <div> <!-- delete button -->
                <form method="POST" action="{{ route('commenthistory.destroy', $comment['id']) }}">
                @method('DELETE')
                @csrf
                    <input type="submit" value="Delete" class = "!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2">
                </form> 
            </div>
            
        </div>
        <div> <!-- update functionality -->
            <form method="POST" action="{{ route('commenthistory.update', $comment['id']) }}">
                @method('PUT')
                @csrf
                <input name="comment" type="text" id="newComment" class="p-6 box-border h-auto w-auto p-4 border-2 bg-gray-200 rounded" value="{{ $comment->newComment }}">
                <input type="submit" value= "Update" class="!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2 ml-2">
            </form> 
        </div>
    </div>
    @endforeach
    </div>