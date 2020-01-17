@extends('layouts.app')

@section('content')
    <h1>{{$album->name}}</h1>
    <a class="btn btn-primary" href="/" role="button">Go Back</a>
    <a class="btn btn-primary" href="/photos/create/{{$album->id}}" role="button">Upload Photo To Album</a>
    <hr>
    
@endsection
