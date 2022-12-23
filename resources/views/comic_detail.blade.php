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
                            Check Avaiability
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
                <div class="talent-area">
                </div>
                    <div class="specs-area">
                </div>
            </div>
        </div>
    </main>
@endsection

@section('title')
    Comic details
@endsection
