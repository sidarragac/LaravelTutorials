@extends('layouts.app')
@section('title', 'Contact Page - Online Store')
@section('subtitle', 'Contact Information')
@section('content')

<div class="container">
    <center>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Name: {{ $name }}</li>
                <li class="list-group-item">Email: {{ $mail }}</li>
                <li class="list-group-item">Phone Number: {{ $phone }}</li>
                <li class="list-group-item">Address: {{ $address }}</li>
            </ul>
        </div>
    </center>
</div>
@endsection