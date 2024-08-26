@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Chatbot</h3>
    @include('chatbot.list')
    <form action="{{ url('/chatbot') }}" method="post" class="fixed-bottom bg-white p-3">
        @csrf
        <div class="input-group m">
            <input type="text" class="form-control" name="massage" placeholder="Type a message..." id="userInput">
            <input class="btn btn-primary" type="submit" value="Send">
            <!-- <button class="btn btn-primary" id="sendBtn">Send</button> -->
        </div>
    </form>
</div>

@endsection