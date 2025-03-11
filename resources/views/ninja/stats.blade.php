@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="row">
    <ul class="list-group">
        <li class="list-group-item">
            Hoja Village Registered Ninjas: {{ $viewData['hojaVillageCount'] }}
        </li>
        <li class="list-group-item">
            Niebla Village Registered Ninjas: {{ $viewData['nieblaVillageCount'] }}
        </li>
        <li class="list-group-item">
            Ninjas' Chakra Sumatory: {{ $viewData['ninjasChakraSumatory'] }}
        </li>
    </ul>
</div>
@endsection