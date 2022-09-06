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
    <a href="{{ route('customers.create')}}" class="btn btn-primary btn-lg">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Customer Name</td>
          <td>Address</td>
          <td>Phone No</td>
          <td>Email</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->phone_no}}</td>
            <td>{{$customer->email}}</td>
            <td><a href="{{ route('customers.edit', $customer->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
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