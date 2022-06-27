@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('main_content')
<div class="comics__list">
    @foreach ($comics as $comic)
    @include('components.comic-card', $comic)
    @endforeach
</div>
@endsection