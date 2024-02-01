@extends('layouts.app')

@section('main')
    <div>
        <div class="container text-center">
            <div>
                <h3>Comic Details</h3>
            </div>
        </div>
        <div class="container">
            <div class="container comics-container">
                <div class="comic">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h5 class="text-uppercase text-center">{{ $comic->title }}</h5>
                    <p class="text-center">{{ $comic->description }}</p>
                    <p class="text-center">Price: {{ $comic->price }}</p>
                    <p class="text-center">Series: {{ $comic->series }}</p>
                    <p class="text-center">Sale date: {{ $comic->sale_date }}</p>
                    <p class="text-center">Type: {{ $comic->type }}</p>
                </div>
            </div>
            <div>
                {{-- button to go back to comics list --}}
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to Comics List</a>
            </div>
        </div>
    </div>
@endsection
