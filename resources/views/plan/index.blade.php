@extends('layout.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="h1 mt-3">All My Plans</div>
  </div>
  <div class="row">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('status')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <a href="/add" class="btn btn-outline-primary my-3 ml-auto">Add New Plan</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($plans as $plan)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$plan->title}}</td>
          <td>{{$plan->category}}</td>
          <td><a href="{{$plan->id}}" class="badge badge-primary">Details</a> <a href="{{$plan->id}}/edit"
              class="badge badge-success">Edit</a>
            <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#deletePlan{{$plan->id}}">Delete</a>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>



<!-- Modal -->
@foreach ($plans as $plan)
<div class="modal fade" id="deletePlan{{$plan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deleting {{$plan->title}} Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this plan?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{$plan->id}}" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection