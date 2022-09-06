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
    Add Type Of Work
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
      <form method="post" action="{{ route('type_of_works.store') }}">
          <div class="form-group">
              @csrf
              <label for="type">Type of Work</label>
              <input type="text" class="form-control" name="type"/>
          </div>
          <div class="form-group">
              <label for="remark">Remark :</label>
              <input type="text" class="form-control" name="remark"/>
          </div>
          <button type="submit" class="btn btn-primary">Add New</button>
      </form>
  </div>
</div>
@endsection