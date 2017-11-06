@extends ("layout.app");

@section("content")
    @foreach ($users as $user)
        <div class ="alert alert-info">
            {{$user->name}}
        </div>
    @endforeach
@endsection