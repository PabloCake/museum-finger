@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>Crear Museos</h1>
        {!! Form::open(['route' => 'museums.store']) !!}

            <div class="form-group">
                    {{Form::label('name', 'Name: ')}}
                    {{Form::text('name',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                    {{Form::label('description', 'Description: ')}}
                    {{Form::textarea('description',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                    {{form::label('image','Image: ')}}
                    {{Form::file('image',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{form::label('thumbnail','Thumbnail')}}
                {{Form::file('thumbnail',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address: ')}}
                {{Form::text('address',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('phone', 'Phone: ')}}
                {{Form::text('phone',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('hours', 'Hours: ')}}
                {{Form::text('hours',null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('rating', 'Rating: ')}}
                {{Form::number('rating',null, ['class' => 'form-control'])}}
            </div>

        {{Form::submit('Click Me!',['class'=>'btn btn-primary'])}}
        {!!Form::close() !!}
    </div>
@endsection


