@extends('layouts.default-layout')


@section('title', 'Videos')

@section('content-style')
<script defer src="https://apis.google.com/js/api.js"></script>
<script defer src="{{ asset('/js/videos.js') }}"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/videos.css') }}">
@stop



@section('content')
<h1>Videos</h1>
<button id="auth-and-load" onclick="authenticate().then(loadClient)">authorize and load</button>
<button id="execute" onclick="execute()">execute</button>

<div class="video-container">

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}">
                <h2>Title123456</h2>
        </div>

        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}"><h2>Title</h2></div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item">
                <img class="thumbnail" src="{{ asset('/media/images/ph2.png') }}">
                <h2>Title</h2>
        </div>

        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>
        <div class="item"><img class="thumbnail" src="{{ asset('/media/images/ph1.png') }}"><h2>Title</h2></div>




</div>
@stop