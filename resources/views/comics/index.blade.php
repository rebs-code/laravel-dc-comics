@extends('layouts.app')

@section('main')
    <div class="main-container">
        <div class="container text-center">
            <div>
                <h3>Comics List</h3>
                {{-- link to create a new record --}}
                <a href="{{ route('comics.create') }}">Create a new record</a>

            </div>
        </div>
        <div class="bottom-container">
            <div class="container comics-container">
                @foreach ($comics as $comic)
                    <div class="comic">
                        {{-- <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"> --}}
                        <h5 class="text-uppercase text-center">{{ $comic->title }} <a
                                href="{{ route('comics.show', $comic) }}" alt="comic book">view details</a> -
                            <a href="{{ route('comics.edit', $comic) }}" alt="comic book">edit details</a>

                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
