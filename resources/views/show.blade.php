@extends('layout')

@section('title')
    Wall
@endsection

@section('content')
    <div class="title m-b-md">
        This is the Wall!!<br><br>
    </div>
    @if ($search !== false)
        recherche : {{$search}}<br>
        <ul>
            @foreach($results as $result)
                <li>
                    {{ $result->content }}
                </li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=> 'write']) !!}
    {!! Form::text('post_content') !!}
    {!! Form::submit('Write on the FUCKING WALL!!! ') !!}

    {!! Form::close() !!}<br><br>
    <ul>
        @foreach($posts as $post)
            <li>
                {{ $post->user->name }} says : {{ $post->content }}
            </li>
        @endforeach
    </ul>
@endsection
