@extends('layout.main')

@section('title', 'Plan Details')

@section('container')
<div class="container">
    <div class="row">
        <h1 class="mt-3">Plan Detail</h1>
    </div>
    <div class="row">
        <div class="col-5">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{$plan->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$plan->category}}</h6>
                    <p class="card-text">{{$plan->description}}</p>
                    <a href="/" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection