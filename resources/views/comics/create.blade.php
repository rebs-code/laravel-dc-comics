@extends('layouts.app')

@section('main')
    <div class="container">
        <div>
            <h2>Insert a new Comic Book Record</h2>
        </div>

        {{-- code to display the error messages --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            {{-- title input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="title"
                    placeholder="Enter title" value="{{ old('title') }}">
            </div>
            {{-- title error --}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- description input --}}
            <div>
                <label for="exampleFormControlTextarea1" class="form-label ">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"></textarea>
            </div>
            {{-- description error --}}
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- price input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price"
                    name="price" value="{{ old('price') }}">
            </div>
            {{-- price error --}}
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- series field --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" placeholder="Enter Series"
                    name="series" value="{{ old('series') }}">
            </div>
            {{-- series error --}}
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- sale_date input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">
                    Date
                </label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Enter date"
                    name="sale_date" value="{{ old('sale_date') }}">
            </div>
            {{-- sale_date error --}}
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- type input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" placeholder="Enter type"
                    name="type" value="{{ old('type') }}">
            </div>
            {{-- type error --}}
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- artists input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror"
                    placeholder="Enter artists separated by comma" name="artists" value="{{ old('artists') }}">
            </div>
            {{-- artists error --}}
            @error('artists')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- writers input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror"
                    placeholder="Enter writers separated by comma" name="writers" value="{{ old('writers') }}">
            </div>
            {{-- writers error --}}
            @error('writers')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- thumb input --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="Enter thumb url" name="thumb" value="{{ old('thumb') }}">
            </div>
            {{-- thumb error --}}
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
