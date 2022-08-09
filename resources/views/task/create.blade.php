@extends('layouts.task')
@section('content')
<br><br><br><br>
<div>
        <form action="{{ route('tasks.store') }}" method="post">
    @csrf    
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
          </div>
          <div class="mb-3">
            <label for="information" class="form-label">Information</label>
            <textarea class="form-control" id="information" rows="3" name="information"></textarea>
          </div>    
          <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@endsection 



