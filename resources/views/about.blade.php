@extends('layout')

@section('title')
    {{ strtoupper($page) }}
@endsection

@section('content')
    <div class="title m-b-md">
        Contenue de la page about
        <a href="/page/home">Home</a>
        <a href="/">Welcome</a>
    </div>
@endsection
