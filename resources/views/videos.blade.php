@extends('layouts.default-layout')


@section('title', 'Videos')

@section('content-style')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/videos.css') }}">
@stop



@section('content')
<h1>Videos</h1>
<div class="video-container">

        @if (isset($videos))
        @foreach ($videos as $video)
        <div class="item">
                <img class="thumbnail" src="{{ $video->snippet->thumbnails->medium->url }}">
                <h2>{{$video->snippet->title}}</h2>
        </div>
        @endforeach
        @endif
</div>
@stop