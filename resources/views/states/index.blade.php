@extends('layouts.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class='float-left m-3'>
    <a href="{{ route('states.create')}}" class="btn btn-primary btn-lg">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>State Name</td>
          <td>country_id</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($states as $state)
        <tr>
            <td>{{$state->id}}</td>
            <td>{{$state->name}}</td>
            <td>{{$state->country_id}}</td>
            <td><a href="{{ route('states.edit', $state->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('states.destroy', $state->id)}}" method="post">
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