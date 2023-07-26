@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="">
                    <div class="card-body">
                        <a class="card-title" href="">{{ $comic->title }}</a>
                    </div>
                </div>
            </div>
        @endforeach       
    </div>    
</div>    
@endsection