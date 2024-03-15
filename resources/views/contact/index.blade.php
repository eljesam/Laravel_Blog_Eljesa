@extends('layouts.app')

@section('content')
<div class="contact">
<header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Contact') }}
                   
                </header>
   
    <form action="/contact" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment"></textarea>
        <br>
        <button type="submit">Send</button>

    </form>
</div>
@endsection