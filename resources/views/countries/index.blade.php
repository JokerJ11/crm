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
    <a href="{{ route('countries.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus mr-1"></i>Create New</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Country Name</td>
          <td>Created At</td>
          <td>Updated At</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
              <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
              <a href="{{ route('countries.edit', $country->id)}}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
                <form action="{{ route('countries.destroy', $country->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-xs show_confirm" type="submit"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection