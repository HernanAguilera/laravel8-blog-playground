@extends('layouts.page')

@section('content')
    @foreach ($articles as $article)
        <div class="bg-gray-200 p-3 mt-3 rounded">
            <h2 class="text-3xl">
                <a href="{{ route('articles.show', $article->id) }}">
                    {{$article->title}}
                </a>
            </h2>
            <div class="body-article">
                {{$article->body}}
            </div>
        </div>
    @endforeach
@endsection
