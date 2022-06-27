@extends('layouts.app')

@section('title')
    {{ $comic['title'] }}
@endsection

@section('main_content')
    <div>
        <div class="container">
            <h2>{{ $comic['title'] }}</h2>
            <div>
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <p>
                {{ $comic['description'] }}
            </p>
            <span> {{ $comic['price'] }}</span>
        </div>
    </div>
@endsection