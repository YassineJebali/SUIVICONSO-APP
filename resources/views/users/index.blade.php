<!-- resources/views/users/index.blade.php -->
<x-layout>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    @foreach ($users as $user)
                        <p>{{ $user->first_name }} {{ $user->last_name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>