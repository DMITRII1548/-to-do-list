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
<div class="container">
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
</body>
</html>