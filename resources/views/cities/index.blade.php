@extends('layouts.app')

@section('content')
<style>
    .uper {
        margin-top: 30px;
    }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class='float-left m-3'>
    <a href="{{ route('cities.create')}}" class="btn btn-primary btn-lg">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>City Name</td>
          <td>State Id</td>
          <td>Created At</td>
          <td>Updated At</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->name}}</td>
            <td>{{$city->state_id}}</td>
            <td>{{$city->created_at}}</td>
            <td>{{$city->updated_at}}</td>
            <td><a href="{{ route('cities.edit', $city->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('cities.destroy', $city->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger show_confirm" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  
<div>
@endsection