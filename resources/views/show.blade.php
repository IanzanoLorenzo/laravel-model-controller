@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->description }}</p>
@endsection