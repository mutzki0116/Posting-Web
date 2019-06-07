@section('title','Users')

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="bootstrap/app.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title> 
</head>
<body> 
@include('header')
    <div class="container pt-4">
      <div>
        <h1>Users</h1><hr>
      </div>	
      <div class="taskContainer table-responsive">
            <table class="table table-light table-bordered table-striped">
              <tr  class="bg-light">
                <th><h4>ID</h4></th>
                <th><h4>Username</h4></th>
                <th><h4>Role</h4></th>
              </tr>
              @foreach($user as $use)
                <tr>
                  <td>{{ $use->id }}</td>
                  <td>{{ $use->username }}</td>
                  <td>{{ $use->role }}</td>
                </tr>
              @endforeach  
            </table>
      </div>
    </div>
</body>
</html>