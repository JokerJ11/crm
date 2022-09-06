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
      <form method="post" action="{{ route('states.update', $states->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">State Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $states->name }}"/>
          </div>
          <div class="form-group">
            <select name="country_id" class="form-control select2-multiple">
            <option value="">Select Country</option>
            @foreach($countries as $country)
              <option value="{{$country->id}}" 
                {{ $country->id == old('country_id',$states->country_id) ? 'selected' : ''}}>
                {{ $country->name }}
              </option>
            @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection