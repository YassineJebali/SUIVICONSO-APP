@extends('layouts.app')

@section('content')
    <h1>{{ $region->name }}</h1>
    <p>{{ $region->description }}</p>
    <a href="{{ route('regions.edit', $region) }}">Edit</a>
    <form method="POST" action="{{ route('regions.destroy', $region) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection