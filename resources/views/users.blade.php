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
        
      <div class="taskContainer table-responsive">
          <div>
            <a href="newpost" class="btn btn-primary col-sm ">Add new User</a><br>
          </div>
            <table class="table table-light table-bordered table-striped">
              <tr  class="bg-light">
                <th><h4>Name</h4></th>
                <th><h4>Role</h4></th>
                <th><h4>Address</h4></th>
                <th><h4>Action</h4></th>
              </tr>  
            </table>
      </div>
    </div>
</body>
</html>