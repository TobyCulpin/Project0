@extends('layouts.default-layout')


@section('title', 'Videos')

@section('content-style')
<script src="https://apis.google.com/js/api.js"></script>
<script defer src="{{ asset('/js/videos.js') }}"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/videos.css') }}">
@stop



@section('content')
	<h1>Videos</h1>
	<button onclick="authenticate().then(loadClient)">authorize and load</button>
	<button onclick="execute()">execute</button>
@stop