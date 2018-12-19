@extends('app')

@section('content')
    <h1>page :New a create </h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <hr/>


    {!! Form::open(['url' => 'article']) !!}

    <div class="form-group">
    {!! Form::label( 'title','Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label( 'body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

    </div>



    {{Form::close()}}

    @include('errors.list')


@endsection