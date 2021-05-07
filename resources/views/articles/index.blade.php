@extends('layouts.page')

@section('content')
    @foreach ($articles as $article)
        <div>
            <h2>{{$article->title}}</h2>
            <div class="body-article">
                {{$article->body}}
            </div>
        </div>
    @endforeach
@endsection
