@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')

<div class="text-center">
    <a href="{{ route('ninja.index') }}">
        <button type="button" class="btn btn-primary">
            View Ninjas
        </button>
    </a>
    <a href="{{ route('ninja.create') }}">
        <button type="button" class="btn btn-secondary">
            Create a Ninja
        </button>
    </a>
    <a href="{{ route('ninja.stats') }}">
        <button type="button" class="btn btn-secondary">
            View Ninjas' Stats
        </button>
    </a>
</div>

@endsection