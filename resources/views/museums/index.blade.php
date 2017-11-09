@extends("layouts.app")

@section("content")
<h1>Museos</h1>
    <div class="container">
        <div CLASS="col-xs-12">
            @foreach($museums as $museum)
                <div class ="alert alert-info">
                    <strong>Nombre: </strong>{{$museum->name}}
                    <div class="well">{{$museum->thumbnail}}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection