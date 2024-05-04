<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Details</div>

                <div class="panel-body">
                    <p>First Name: {{ $user->first_name }}</p>
                    <p>Last Name: {{ $user->last_name }}</p>
                    <!-- Display more details as necessary -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection