@extends('layouts.app')
@section('title', 'Contact Page - Online Store')
@section('content')

<div class="container">
    <center>
        <h1>Contact Page</h1><br>
        <div class="card" style="width: 18rem;">
            <div class="card-header">Contact Information</div>
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