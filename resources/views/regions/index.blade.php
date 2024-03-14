@extends('layouts.app')

@section('content')
    <h1>All Regions</h1>
    @foreach ($regions as $region)
        <div>
            <h2>{{ $region->name }}</h2>
            <a href="{{ route('regions.show', $region) }}">View</a>
            <a href="{{ route('regions.edit', $region) }}">Edit</a>
            <form method="POST" action="{{ route('regions.destroy', $region) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
    <a href="{{ route('regions.create') }}">Create New Region</a>
@endsection