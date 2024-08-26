@foreach ($history_chat as $chat)
    <div class="d-flex justify-content-end my-2">
        <div class="card text-end bg-body-secondary" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text">{!! Str::markdown($chat->send_chat) !!}</p>
            </div>
        </div>
    </div>
    <div class="my-2 card bg-body-white">
        <div class=" card-body">
            <p class="card-text">{!!Str::markdown($chat->get_chat)!!}</p>
        </div>
    </div>

@endforeach