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
      <form method="post" action="{{ route('tasks.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Task Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          {{-- <div class="form-group">
              <label for="cases">Ref No :</label>
              <input type="int" class="form-control" name="ref_no"/>
          </div> --}}
          <div class="form-group">
          <label for="cases">Type of work Id :</label>
          <select name="type_of_work_id" class="form-control select2-multiple">
          <option value="">Select Type</option>
              @foreach($types as $type)
                <option value="{{ $type->id }}" {{ (old('type')==$type->id) ? 'selected=selected' : '' }} >{{ $type->type }}</option>
              @endforeach
          </select>
          </div>
          <div class="form-group">
              <label for="cases">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="cases">Attachment :</label>
              <input type="text" class="form-control" name="attachment"/>
          </div>
          <div class="form-group">
              <label for="cases">Assigned Date :</label>
              <input type="date" class="form-control" name="assigned_date"/>
          </div>
          <div class="form-group">
              <label for="cases">Due Date :</label>
              <input type="date" class="form-control" name="due_date"/>
          </div>
          {{-- <div class="form-group">
              <label for="cases">Start Date :</label>
              <input type="date" class="form-control" name="start_date"/>
          </div>
          <div class="form-group">
              <label for="cases">Stop Date :</label>
              <input type="date" class="form-control" name="stop_date"/>
          </div> --}}
          <div class="form-group">
              <label for="cases">Progress :</label>
              {{-- <input type="text" class="form-control" name="progress"/>
               --}}
               <select name="progress" class="form-control select2-multiple">
                <option value="">Select Onprogress</option>
                      <option value="complete">Complete</option>
                      <option value="on_progress">On Progress</option>
                      <option value="not_start">Not Start</option>
                </select>
          </div>
          <div class="form-group">
              <label for="cases">Plan Duration :</label>
              <input type="date" class="form-control" name="plan"/>
          </div>
          {{-- <div class="form-group">
              <label for="cases">Actual Duration :</label>
              <input type="date" class="form-control" name="actual"/>
          </div> --}}
          <button type="submit" class="btn btn-primary">Add New</button>
      </form>
  </div>
</div>
@endsection