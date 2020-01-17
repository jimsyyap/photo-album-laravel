
@extends('layouts.app')

@section('content')
    <div class="card justify-content-center">
        <div class="card-body">
            <div class="card-header"><strong>Upload Photo</strong> <a href="#" class="float-right">Go back</a></div>
                    {!!Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                        <p>
                        {{Form::text('title', '', ['placeholder' => 'Photo Title'])}}
                        </p>
                        <p>
                        {{Form::textarea('description', '', ['placeholder' => 'Photo Description'])}}
                        </p>
                        <p>
                            {{Form::hidden('album_id', $album_id)}}
                        </p>
                        <p>
                        {{Form::file('photo')}}
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
