@extends('layouts.task')
@section('content')
<br><br><br><br>
<div>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('patch')  
        <div class="mb-3">
            <label for="information" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" value="{{ $task->title }}" name="title" >
        </div>
        <div class="mb-3">
            <label for="information" class="form-label">Information</label>
            <textarea class="form-control" id="information" rows="3" name="information">{{ $task->information }}</textarea>
        </div>    
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
</div>    
@endsection