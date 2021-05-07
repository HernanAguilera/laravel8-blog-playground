@extends('layouts.page')

@section('content')
    <div class="bg-gray-200 p-3 mt-3 rounded">
        <h2 class="text-3xl">
            {{$article->title}}
        </h2>
        <div class="body-article">
            {{$article->body}}
        </div>
    </div>
    @foreach ($article->comments as $comment)
        <div class="p-2">
            <p class="text-xs text-gray-500">{{$comment->author->name}} - {{$comment->created_at->diffForHumans()}}</p>
            <p>{{$comment->body}}</p>
        </div>
        <hr>
    @endforeach
    <div class="border-grey-200 p-3 mt-4 rounded">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border border-gray-200">
                    <form  method="post" action="{{ route('comments.store') }}">
                        @csrf
    
                        <div class="mb-4">
                            <label class="text-xl text-gray-600" for="body">
                                Comment <span class="text-red-500">*</span>
                            </label>
                            <textarea name="body" id="body" class="border-2 border-gray-300 p-2 w-full" required></textarea>
                        </div>
                        <input type="hidden" name="article_id" value="{{$article->id}}">
                        <div class="flex p-1">
                            <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                Save comment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
