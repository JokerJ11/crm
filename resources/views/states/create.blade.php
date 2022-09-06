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
      <form method="post" action="{{ route('states.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">State Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
          <select name="country_id" class="form-control select2-multiple">
          <option value="">Select State</option>
              @foreach($countries as $country)
                <option value="{{ $country->id }}" {{ (old('country')==$country->id) ? 'selected=selected' : '' }} >{{ $country->name }}</option>
              @endforeach
          </select>
          </div>
          <button type="submit" class="btn btn-primary">Add New</button>
      </form>
  </div>
</div>
@endsection