<!-- create blade php  -->

@extends('layouts.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="card uper">
  <div class="card-header">
    Add Customers Data
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
      <form method="post" action="{{ route('customers.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Customer Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cases">Address :</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <div class="form-group">
              <label for="cases">Phone No :</label>
              <input type="text" class="form-control" name="phone_no"/>
          </div>
          <div class="form-group">
              <label for="cases">Email :</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <button type="submit" class="btn btn-primary">Add New</button>
      </form>
  </div>
</div>
@endsection