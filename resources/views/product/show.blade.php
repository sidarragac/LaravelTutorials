@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["product"]["name"] }}
                </h5>
                @if($viewData["product"]["price"] > 100)
                    <p class="card-text" style="color: red">Price: ${{ $viewData["product"]["price"] }}</p>
                @else
                    <p class="card-text">Price: ${{ $viewData["product"]["price"] }}</p>
                @endif
                @foreach($viewData["product"]->comments as $comment)
                    - {{ $comment->getDescription() }}<br />
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection