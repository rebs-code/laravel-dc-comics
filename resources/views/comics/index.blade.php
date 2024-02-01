@extends('layouts.app')

@section('main')
    <div class="main-container">
        <div class="container text-center">
            <div>
                <h3>Comics List</h3>
            </div>
        </div>
        <div class="bottom-container">
            <div class="container comics-container">
                @foreach ($comics as $comic)
                    <div class="comic">
                        {{-- <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"> --}}
                        <h5 class="text-uppercase text-center">{{ $comic->title }} <a
                                href="{{ route('comics.show', $comic->id) }}" alt="comic book">view details</a></h5>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
