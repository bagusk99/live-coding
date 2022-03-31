@extends('app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-7">
      <div class="card">
        <div class="card-body">
          <form action="{{ $route }}" method="post">
            @if ($data ?? null)
              @method('PUT')
            @endif
            @csrf
            <div class="form-group">
              <label for="">Manufactured Date</label>
              <input type="date" class="form-control" name="manufactured_date" value="{{ $data?->manufactured_date->format('Y-m-d') }}">
            </div>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $data?->name }}">
            </div>
            <div class="form-group">
              <label for="">Manufacture</label>
              <input type="text" class="form-control" name="manufacture" value="{{ $data?->manufacture }}">
            </div>
            <div class="form-group">
              <label for="">Price</label>
              <input type="number" class="form-control" name="price" value="{{ $data?->price }}">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <textarea name="description" class="form-control">{{ $data?->description }}</textarea>
            </div>
            <div class="form-group text-right">
              <button class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
