@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Contact</h1>

        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control" required></textarea> 

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection