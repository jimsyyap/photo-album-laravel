@extends('layouts.app')

@section('content')
    <div class="card justify-content-center">
        <div class="card-body">
            <div class="card-header">Create Album <a href="#" class="float-right">Go back</a></div>
                    {!!Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                        <p>
                        {{Form::text('name', '', ['placeholder' => 'Album Name'])}}
                        </p>
                        <p>
                        {{Form::textarea('description', '', ['placeholder' => 'Album Description'])}}
                        </p>
                        <p>
                        {{Form::file('cover_image')}}
                        </p>
                        <p>
                        {{Form::submit('submit')}}
                        </p>
                    {!! Form::close() !!}
            <div class="card-text">
                <p>stuff go here</p>

            </div>
        </div>
    </div>
@endsection
