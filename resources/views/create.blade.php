<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container"><br>
    
    <form action="{{ route('tasks.store') }}" method="post">
    @csrf    
        <div class="mb-3">
            <label for="information" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
          </div>
          <div class="mb-3">
            <label for="information" class="form-label">Information</label>
            <textarea class="form-control" id="information" rows="3" name="information"></textarea>
          </div>    
          <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
</body>
</html>


