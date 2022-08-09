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
    </style>
</head>
<body>
<div class="container">
  <header>
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

    </header>  
    </form>
    <div>
      @yield('content')  
    </div>
    
</div>
</body>
</html>



