@extends('app')

@section('content')

    <h3>show blade page</h3>

    <h1>{{$article->title}}</h1>

    <article>
        {{$article->body}}
    </article>
@endsection