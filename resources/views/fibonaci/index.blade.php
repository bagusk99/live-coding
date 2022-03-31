@extends('app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <form action="">
            <div class="form-group">
              <label for="">Input</label>
              <input type="text" class="form-control" name="input">
            </div>
            <div class="form-group text-right">
              <button class="btn btn-sm btn-primary">Generate</button>
            </div>
          </form>

          <div class="form-group">
            <label for="">Result</label>
            <input type="text" class="form-control" value="{{ $fibonaci ?? '' }}" disabled>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 text-center mt-4">
      <a href="{{ route('car.index') }}" class="btn btn-info">Test 1</a>
    </div>
  </div>
@stop
