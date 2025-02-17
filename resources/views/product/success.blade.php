@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container d-flex align-items-center flex-column">
    <div class="row g-0 w-100 mb-2">
        <div class="col-md-6 d-flex align-items-center justify-content-end px-5">
            Product Description:
        </div>
        <div class="col-md-6 px-5">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["product"]["name"] }}
                </h5>
                <p class="card-text">Price: ${{ $viewData["product"]["price"] }}</p>
            </div>
        </div>
    </div>
    <a href="{{ route('product.index') }}" class="btn btn-primary mt-2">Back</a>
</div>
@endsection