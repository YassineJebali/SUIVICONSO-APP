
@extends('layouts.app')

@section('content')
    <h1>Create New Region</h1>
    <form method="POST" action="{{ route('regions.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
