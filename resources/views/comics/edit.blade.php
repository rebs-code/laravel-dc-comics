@extends('layouts.app')

@section('main')
    <div class="container">
        <div>
            <h2>Modify an Existing Comic Book Record</h2>
            <h4>Modifying: {{ $comic->title }}</h4>
            <p><a href="{{ route('comics.index') }}">Back to list of Comics</a></p>
        </div>
        {{-- code to display the error messages --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- form to update --}}
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- title input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title"
                    value="{{ old('title', $comic->title) }}">
            </div>
            {{-- description input --}}
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3">{{ old('description', $comic->description) }}"</textarea>
            </div>
            {{-- price input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" placeholder="Enter price" name="price"
                    value="{{ old('price', $comic->price) }}">
            </div>
            {{-- series field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Series</label>
                <input type="text" class="form-control" placeholder="Enter Series" name="series"
                    value="{{ old('series', $comic->series) }}">
            </div>
            {{-- date field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Date
                </label>
                <input type="text" class="form-control" placeholder="Enter date" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            {{-- type field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control" placeholder="Enter type" name="type"
                    value="{{ old('type', $comic->type) }}">
            </div>
            {{-- artists field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Artists</label>
                <input type="text" class="form-control" placeholder="Enter artists separated by comma" name="artists"
                    value="{{ old('artists', $comic->artists) }}">
            </div>
            {{-- writers field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Writers</label>
                <input type="text" class="form-control" placeholder="Enter Writers separated by comma" name="writers"
                    value="{{ old('writers', $comic->writers) }}">
            </div>
            {{-- thumb field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Thumb</label>
                <input type="text" class="form-control" placeholder="Enter thumb url" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
