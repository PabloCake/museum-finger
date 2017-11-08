@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>Crear Museos</h1>
        {!! Form::open(['route' => 'museums.store']) !!}

            <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                    {{Form::label('name', 'Name: ')}}
                    {{Form::text('name',null, ['class' => 'form-control']) }}
                @if($errors->has('name'))
                    <span class="help-block">
                        @foreach($errors->get('name') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('description')? 'has-error':''}}">
                    {{Form::label('description', 'Description: ')}}
                    {{Form::textarea('description',null, ['class' => 'form-control'])}}
                @if($errors->has('description'))
                    <span class="help-block">
                        @foreach($errors->get('description') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                    {{form::label('image','Image: ')}}
                    {{Form::file('image',null, ['class' => 'form-control'])}}
                @if($errors->has('image'))
                    <span class="help-block">
                        @foreach($errors->get('image') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('thumbnail')? 'has-error':''}}">
                {{form::label('thumbnail','Thumbnail')}}
                {{Form::file('thumbnail',null, ['class' => 'form-control'])}}
                @if($errors->has('thumbnail'))
                    <span class="help-block">
                        @foreach($errors->get('thumbnail') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('address')? 'has-error':''}}">
                {{Form::label('address', 'Address: ')}}
                {{Form::text('address',null, ['class' => 'form-control'])}}
                @if($errors->has('address'))
                    <span class="help-block">
                        @foreach($errors->get('address') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('phone')? 'has-error':''}}">
                {{Form::label('phone', 'Phone: ')}}
                {{Form::text('phone',null, ['class' => 'form-control'])}}
                @if($errors->has('phone'))
                    <span class="help-block">
                        @foreach($errors->get('phone') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('hours')? 'has-error':''}}">
                {{Form::label('hours', 'Hours: ')}}
                {{Form::text('hours',null, ['class' => 'form-control'])}}
                @if($errors->has('hours'))
                    <span class="help-block">
                        @foreach($errors->get('hours') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="form-group {{$errors->has('rating')? 'has-error':''}}">
                {{Form::label('rating', 'Rating: ')}}
                {{Form::number('rating',null, ['class' => 'form-control'])}}
                @if($errors->has('rating'))
                    <span class="help-block">
                        @foreach($errors->get('rating') as $message)
                            <strong>{{$message}}</strong>
                        @endforeach
                    </span>
                @endif
            </div>

        {{Form::submit('Click Me!',['class'=>'btn btn-primary'])}}
        {!!Form::close() !!}
    </div>
@endsection