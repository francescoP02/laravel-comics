@extends('layouts.app')

@section('title')
    DC Comics
@endsection

@section('main_content')
    <section class="comics">
        <div class="jumbotron">
        </div>
        <span class="large-btn blue-btn">CURRENT SERIES</span>
        <div class="container">
        <div class="comics__list">
            @foreach ($comics as $comic)
            @include('components.comic-card', $comic)
            @endforeach
        </div>
        <span class="blue-btn load-btn">LOAD MORE</span>
        </div>
  </section>
  <section class="shop">
    @include('components.shop')
  </section>
@endsection