@extends('app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>danufactured Date</th>
                <th>Name</th> 
                <th>Manufacture</th> 
                <th>Price</th> 
                <th>Description</th> 
                <th>
                  <a href="{{ route('car.create') }}" class="btn btn-sm btn-success">Add Data</a>
                </th> 
              </tr>
            </thead>
            <tbody>
              @forelse ($data ?? [] as $index =>  $row)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $row->manufactured_date->format('d/m/Y') }}</td>
                  <td>{{ $row->name }}</td> 
                  <td>{{ $row->manufacture }}</td> 
                  <td>{{ $row->price }}</td> 
                  <td>{{ $row->description }}</td> 
                  <td>
                    <a href="{{ route('car.edit', $row->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('car.destroy', $row->id) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>   
              @empty
                <tr>
                  <td colspan="7" class="text-center">Data Empty</td>
                </tr> 
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-12 text-center mt-3">
      <a href="{{ route('fibonaci.index') }}" class="btn btn-info">Test 2</a>
    </div>
  </div>
@stop