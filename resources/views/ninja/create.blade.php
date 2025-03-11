@extends('layouts.app')

@section("title", $viewData["title"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create ninja</div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ route('ninja.save') }}"> @csrf
                            <input 
                                type="text" 
                                class="form-control mb-2" 
                                placeholder="Name" 
                                name="name" 
                                value="{{ old('name') }}" 
                            />
                            <select
                                class="form-control mb-2" 
                                name="village">
                                <option value="">Select a village</option>
                                <option value="Hoja" {{ old('type') == 'Hoja' ? 'selected' : '' }}>Hoja</option>
                                <option value="Niebla" {{ old('type') == 'Niebla' ? 'selected' : '' }}>Niebla</option>
                            </select>
                            <input 
                                type="number" 
                                class="form-control mb-2" 
                                placeholder="Chakra" 
                                name="chakra" 
                                value="{{ old('chakra') }}" 
                            />
                            <input type="submit" class="btn btn-primary" value="Send" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection