@extends("layouts.app");

@section("content")
    <div class="container">
        <div class="col-xs-12">
            @foreach($users as $user)
                <div class ="alert alert-info">
                    {{ $user->name }}

                    {{ $user->email }}
                </div>
            @endforeach
        </div>
    </div>
@endsection