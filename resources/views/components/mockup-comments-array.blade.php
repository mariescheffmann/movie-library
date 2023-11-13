<div class="mockupComments flex flex-row w-500 white-space-nowrap overflow-x-auto p-20 pb-5 pt-5">
    @foreach ($mockupComments as $comment)
        <p>{{ $comment['content'] }}</p>
    @endforeach
</div>