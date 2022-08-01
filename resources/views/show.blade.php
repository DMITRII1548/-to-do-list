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
</body>
</html>