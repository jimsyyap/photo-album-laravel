@extends('layouts.app')

@section('content')
    @if(count($albums) > 0)
        <?php
            $colcount = count($albums);
            $i = 1;
        ?>
    <div id="albums">
        <div class="row text-center">
            @foreach($albums as $album)
                @if($i == $colcount)
                    <div class='col-sm-3'>
                        <a href="/albums/{{$album->id}}">
                            <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                        </a>
                        <br>
                        <h4>{{$album->name}}</h4>
                    @else
                        <div class='col-sm-3'>
                            <a href="/albums/{{$album->id}}">
                                <img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                            </a>
                            <br>
                            <h4>{{$album->name}}</h4>
                        @endif
                        @if($i % 3 == 0)
                            </div>
                            </div>
                            <div class="text-center">
                        @else
                            </div>
                        @endif
                        <?php $i++; ?>
                    @endforeach
        </div>
    </div>
@else
    <p>No Albums To Display</p>
@endif

@endsection
