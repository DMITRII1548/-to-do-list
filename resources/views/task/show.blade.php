@extends('layouts.task')
@section('content')
  <div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">{{ $task->title }}</th>
        </thead>
        <tbody>
          <tr>
            <td>{{ $task->information }}</td>
          </tr>
        </tbody>
      </table>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>      
  </div>
@endsection