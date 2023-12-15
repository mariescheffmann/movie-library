<div class="mockupComments flex-col m-8">
    @foreach ($comments as $comment)
    <div class = "m-8" id="{{$comment['id']}}"> <!-- Contains each comment -->
        <div class = "flex text-xl"> <!-- Contains which movie (with rating?) the comment has been made on and timetamp -->
            <h3 class = "pr-8">{{ $comment->movie->title }}</h3>
            <h4>{{ $comment->created_at }}</h4>
        </div>
        <div class = "p-6 box-border h-auto w-auto p-4 border-2 bg-gray-200 rounded">
            <p class = "text-gray-700 text-xl">{{ $comment->comment }}</p>
        </div>
        <div class="flex" id="buttonContainer{{$comment['id']}}"> <!-- Button container -->
            <div> <!-- activate update functionality button - NOT IMPLEMENTED -->
                <button id="updateButton{{$comment['id']}}" class="!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2 mr-4">Update</button>
            </div>
            <div> <!-- delete button -->
                <form method="POST" action="{{ route('commenthistory.destroy', $comment['id']) }}">
                @method('DELETE')
                @csrf
                    <input type="submit" value="Delete" class = "!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2">
                </form> 
            </div>
            
        </div>
        <!-- <div id="updateCommentForm" class="hidden w-auto"> <!-- update functionality -->
            <!-- <form method="POST" action="{{ route('commenthistory.update', $comment['id']) }}">
                @method('PUT')
                @csrf
                <input id="formText" name="comment" type="text" id="newComment" class="!p-2 !box-border !h-auto !w-4/5 !p-4 !border-2 !bg-gray-200 !rounded !text-gray-700 !text-xl !mt-2">
                <input type="submit" value= "Update" id="updateSubmit" class="!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2 ml-2">
            </form> 
        </div> -->
        <script>
            document.getElementById("updateButton{{$comment['id']}}").addEventListener("click", updateComment);

            function updateComment() {
                let outerCommentDiv = document.getElementById("{{$comment['id']}}");

                if (outerCommentDiv) {
                    let updateCommentForm = document.createElement("form");
                    updateCommentForm.method = "POST";
                    updateCommentForm.action = "{{ route('commenthistory.update', $comment['id']) }}";

                    let methodInput = document.createElement("input");
                    methodInput.type = "hidden";
                    methodInput.name = "_method";
                    methodInput.value = "PUT";
                    updateCommentForm.appendChild(methodInput);

                    let csrfInput = document.createElement("input");
                    csrfInput.type = "hidden";
                    csrfInput.name = "_token";
                    csrfInput.value = "{{ csrf_token() }}";
                    updateCommentForm.appendChild(csrfInput);

                    let inputText = document.createElement("input");
                    inputText.type = "text";
                    inputText.name = "comment";
                    inputText.className="!p-2 !box-border !h-auto !w-4/5 !p-4 !border-2 !bg-gray-200 !rounded !text-gray-700 !text-xl !mt-2"
                    updateCommentForm.appendChild(inputText);

                    let inputSubmit = document.createElement("input");
                    inputSubmit.type = "submit";
                    inputSubmit.value = "Update";
                    inputSubmit.className="!bg-purple-theme hover:!bg-purple-darker-theme text-white font-bold py-2 px-4 rounded mt-2 mb-2 ml-2"
                    updateCommentForm.appendChild(inputSubmit);

                    outerCommentDiv.appendChild(updateCommentForm);
                }

                document.getElementById("buttonContainer{{$comment['id']}}").style.display = "none";
            }
        </script>
    </div>
    @endforeach
    </div>