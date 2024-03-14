@extends('layouts.app')

@section('content')
    <h1>Edit Region</h1>
    <form method="POST" action="{{ route('regions.update', $region) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $region->name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $region->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection