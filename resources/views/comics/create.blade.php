@extends('layouts.app')

@section('main')
    <div class="container">
        <div>
            <h2>Insert a new Comic Book Record</h2>
        </div>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" placeholder="Enter price" name="price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Series</label>
                <input type="text" class="form-control" placeholder="Enter Series" name="series">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Date
                </label>
                <input type="text" class="form-control" placeholder="Enter date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control" placeholder="Enter type" name="type">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Artists</label>
                <input type="text" class="form-control" placeholder="Enter artists separated by comma" name="artists">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Writers</label>
                <input type="text" class="form-control" placeholder="Enter Writers separated by comma" name="writers">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Thumb</label>
                <input type="text" class="form-control" placeholder="Enter thumb url" name="thumb">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
