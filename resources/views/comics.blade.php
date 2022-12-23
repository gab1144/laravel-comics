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
        <div class="main-icons-area">
            @php
                $icons = config('db.main_icons')
            @endphp
            <div class="container">
                @foreach ($icons as $icon)
                <div class="icon">
                    <img src="{{ Vite::asset('resources/img/'.$icon['img']) }}" alt="">
                    <span>{!! $icon['text'] !!}</span>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

@section('title')
    Comics
@endsection
