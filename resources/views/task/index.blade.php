@extends('layouts.task')
@section('content')
       <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">№</th>        
            <th scope="col">Title</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)  
            <tr>
              <th scope="row">{{ $task->id }}</th>
              <th>{{ $task->title }}</th>
              <th>{{ $task->created_at }}</th>
              <th>
                <a href="{{ route('tasks.show', $task) }} " class="btn btn-success" style="float: left">Read</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning " style="float: left">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="float: left">
                  @csrf
                  @method('delete')
                  <input class="btn btn-danger" type="submit" value="Delete">
                </form>
              </th>
            </tr>
          @endforeach
        </tbody>
      </table>
      <a class="button-add btn btn-primary" href="{{ route('tasks.create') }}">Add</a>
      <div class="pagination">
        {{ $tasks->withQueryString()->links() }}
      </div>
      <style>
        #search {
          float: right;
        }
        .navigation {
          float: left;
        }
        .pagination {
          float: left;
        }
        .button-add {
          float: right;
        }
    </style> 
@endsection

