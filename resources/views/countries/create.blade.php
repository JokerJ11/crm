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
    Add Country Data
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
      <form method="post" action="{{ route('countries.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Country Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <button type="submit" class="btn btn-primary">Add New</button>
      </form>
  </div>
</div>
@endsection