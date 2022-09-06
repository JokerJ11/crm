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
    <a href="{{ route('type_of_works.create')}}" class="btn btn-primary btn-lg">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Type</td>
          <td>Remark</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->type}}</td>
            <td>{{$type->remark}}</td>
            <td><a href="{{ route('type_of_works.edit', $type->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('type_of_works.destroy', $type->id)}}" method="post">
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