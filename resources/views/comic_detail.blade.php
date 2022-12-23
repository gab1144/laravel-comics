@extends('layouts.main')

@section('content')
    <div class="jumbotron">
    </div>

    <main class="main-comic-detail">
        <div class="img-area-comic-detail">
            <div class="smaller container">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
        </div>
        <div class="smaller container">
            <div class="detail-area">
                <div class="details">

                    <h1>{{$comic['title']}}</h1>
                    <div class="price-area">
                        <div class="price">
                            <div>
                                <span>U.S. Price:</span> {!! $comic['price'] !!}
                            </div>
                            <div class="is-available">
                                available
                            </div>
                        </div>
                        <div class="avaiability">
                            Check Avaiability <span>&#9660;</span>
                        </div>
                    </div>
                    <p>
                        {!! $comic['description'] !!}
                    </p>
                </div>
                <div class="adv">
                    <span>Advertisment</span>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adv">
                </div>
            </div>
            </div>
            <div class="talent-specs">
                <div class="smaller container">
                    <div class="talent-area">
                        <h2>Talent</h2>
                        <div class="info">
                            <div class="field">
                                Art by:
                            </div>
                            <div class="content">
                                {{ implode(', ', $comic['artists']) }}
                            </div>
                        </div>
                        <div class="info">
                            <div class="field">
                                Written by:
                            </div>
                            <div class="content">
                                {{ implode(', ', $comic['writers']) }}
                            </div>
                        </div>
                    </div>
                    <div class="specs-area">
                        <h2>Specs</h2>
                        <div class="info">
                            <div class="field">
                                Series:
                            </div>
                            <div class="content">
                                <a href="#" class="series">{!! $comic['series'] !!}</a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="field">
                                U.S. Price:
                            </div>
                            <div class="content">
                                {!! $comic['price'] !!}
                            </div>
                        </div>
                        <div class="info">
                            <div class="field">
                                On Sale Date:
                            </div>
                            <div class="content">
                                {!! $comic['sale_date'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icons-area">
            @php
                $icons = config('db.detail_icons')
            @endphp
            <div class="smaller container">
                @foreach ($icons as $icon)
                <div class="icon">
                    <span>{!! $icon['text'] !!}</span>
                    <img src="{{ Vite::asset('resources/img/'.$icon['img']) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

@section('title')
    Comic details
@endsection
