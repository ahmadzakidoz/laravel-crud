@extends('layout.main')

@section('title', 'Add New Plan')

@section('container')
<div class="container">
    <div class="row">
        <h1>Add New Plan</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <form action="/add" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        value="{{old('title')}}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                        name="category" value="{{old('category')}}">
                    @error('category')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="3" class="form-control" id="description"
                        name="description">{{old('title')}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection