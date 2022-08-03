<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
</head>
<body>
<div class="container">
    <div class="navigation mt-2">
      <nav  class="navbar navbar-expand-lg navbar-light bg-light"><a  class="navbar-brand" href="{{ route('tasks.index') }}">Home</a></nav>
    </div>
    <form action="{{ route('tasks.search') }}" method="get" id="search">
      <div class="form-group mt-3 mb-3">
        <label for="search">
          Search
        <input type="text" name="search" placeholder="Search"></label>
        <input type="submit" value="Search" class="btn btn-info">
      </div>
      
    </form>
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
        {{ $tasks->appends(['search' => request()->search])->links() }}
      </div>
</div>
</body>
</html>