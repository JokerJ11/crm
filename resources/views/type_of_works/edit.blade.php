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
      <form method="post" action="{{ route('type_of_works.update', $types->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name"> Type of Work:</label>
              <input type="text" class="form-control" name="type" value="{{ $types->type }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Remark :</label>
              <input type="text" class="form-control" name="remark" value="{{ $types->remark }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection