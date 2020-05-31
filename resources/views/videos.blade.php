@extends('layouts.default-layout')


@section('title', 'Videos')

@section('content-style')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/videos.css') }}">
@stop



@section('content')
<h1>Videos</h1>
<button onclick="authenticate().then(loadClient)">authorize and load</button>
<button onclick="execute()">execute</button>

<div class="video-container">

        @foreach ($videos as $video)
        <div class="item">
                <img class="thumbnail" src="{{ $video->snippet->thumbnails->default->url }}">
                <h2>{{$video->snippet->title}}</h2>
        </div>
        @endforeach
</div>
@stop