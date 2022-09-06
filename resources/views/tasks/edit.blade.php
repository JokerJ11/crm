@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Customer Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customers.update', $customer->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Customer Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $customer->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Address :</label>
              <input type="text" class="form-control" name="address" value="{{ $customer->address }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Phone No :</label>
              <input type="text" class="form-control" name="phone_no" value="{{ $customer->phone_no }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Email :</label>
              <input type="email" class="form-control" name="email" value="{{ $customer->email }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection