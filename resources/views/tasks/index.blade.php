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
    <a href="{{ route('tasks.create')}}" class="btn btn-primary btn-lg">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Ref No</td>
          <td>Type Id</td>
          <td>Description</td>
          <td>attachment</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->name}}</td>
            <td>{{$task->ref_no}}</td>
            <td>{{$task->type_of_work_id}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->attachment}}</td>
            <td><a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a></td>
            <td><a href="{{ route('tasks.edit', $task->id)}}" class="btn btn-secondary"><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection