@extends('layout.main')

@section('title', 'Edit Plan')

@section('container')
<div class="container">
    <div class="row">
        <h1>Edit Plan</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <form action="/{{$plan->id}}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        value="{{$plan->title}}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                        name="category" value="{{$plan->category}}">
                    @error('category')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="3" class="form-control" id="description"
                        name="description">{{$plan->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection