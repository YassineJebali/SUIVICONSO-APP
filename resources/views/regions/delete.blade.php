@extends('layouts.app')

@section('content')
    <h1>Delete Region</h1>
    <p>Are you sure you want to delete {{ $region->name }}?</p>
    <form method="POST" action="{{ route('regions.destroy', $region) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Yes, Delete</button>
    </form>
    <a href="{{ route('regions.index') }}">No, Go Back</a>
@endsection