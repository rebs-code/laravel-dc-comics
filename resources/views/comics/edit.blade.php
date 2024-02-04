@extends('layouts.app')

@section('main')
    <div class="container">
        <div>
            <h2>Modify an Existing Comic Book Record</h2>
            <h4>Modifying: {{ $comic->title }}</h4>
        </div>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" placeholder="Enter price" name="price"
                    value="{{ $comic->price }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Series</label>
                <input type="text" class="form-control" placeholder="Enter Series" name="series"
                    value="{{ $comic->series }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Date
                </label>
                <input type="text" class="form-control" placeholder="Enter date" name="sale_date"
                    value="{{ $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control" placeholder="Enter type" name="type"
                    value="{{ $comic->type }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Artists</label>
                <input type="text" class="form-control" placeholder="Enter artists separated by comma" name="artists"
                    value="{{ $comic->artists }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Writers</label>
                <input type="text" class="form-control" placeholder="Enter Writers separated by comma" name="writers"
                    value="{{ $comic->writers }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thumb</label>
                <input type="text" class="form-control" placeholder="Enter thumb url" name="thumb"
                    value="{{ $comic->thumb }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
