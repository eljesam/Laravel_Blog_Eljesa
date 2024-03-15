@extends('layouts.app')

@section('content')
    <h1>Contact Page</h1>
    <p>Welcome to the contact page!</p>
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
@endsection