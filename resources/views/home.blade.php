@extends('layouts.default-layout')


@section('title', 'Home')

@section('content-style')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}">
@stop

@section('content')
        <div id="title">
                <h1>Project Zero</h1>
                <img src="{{ asset('/media/images/ph1.png') }}"></img>
        </div>

        
@stop