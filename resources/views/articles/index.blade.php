@extends('app')

@section('content')
    <h1>articles index page</h1>

    <hr>

    @foreach($articles as $article )
        <article>
            <a href="/article/{{$article->id}}"><h2>{{$article -> title}}</h2></a>
            <div class="body"> {{$article -> body}}</div>

        </article>
    @endforeach
    @endsection