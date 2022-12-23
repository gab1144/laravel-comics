@extends('layouts.main')

@section('content')
    <div class="jumbotron">
    </div>

    <main>
        <div class="container">

            <span class="tag">Current series</span>
            <div class="card-area">
                @foreach ($comics as $comic)
                <a href="{{ route('comic_detail', ['id' => $comic['id']]) }}" class="card">
                    <div class="img-area">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <span>{{$comic['title']}}</span>
                </a>
            @endforeach
            </div>
        </div>
    </main>
@endsection

@section('title')
    Comics
@endsection
