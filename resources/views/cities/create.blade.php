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
    Add City Data
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
      <form method="post" action="{{ route('cities.store') }}">
          <div class="form-group">
              @csrf
              <label for="city_name">City Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
          <select name="state_id" class="form-control select2-multiple">
          <option value="">Select State</option>
              @foreach($states as $state)
                <option value="{{ $state->id }}" {{ (old('state')==$state->id) ? 'selected=selected' : '' }} >{{ $state->name }}</option>
              @endforeach
          </select>
          </div>
          <button type="submit" class="btn btn-primary">Add New</button>
      </form>
  </div>
</div>
@endsection