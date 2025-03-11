@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="row">
    @foreach ($viewData["ninjas"] as $ninja)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    {{ $ninja->getName() }}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Id: {{ $ninja->getId() }}</p>
                        <footer class="blockquote-footer">
                            <cite title="Source Title">Village: {{ $ninja->getVillage() }}</cite><br>
                            @if($ninja->getVillage() == "Hoja")
                                <cite title="Source Title" style="color: red;">
                                    Chakra: {{ $ninja->getChakra() }}
                                </cite>
                            @else
                                <cite title="Source Title" style="color: blue;">
                                    Chakra: {{ $ninja->getChakra() }}
                                </cite>
                            @endif
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection