<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Timeline</title> 
</head>
<body>  
@include('headerUserside')
<div class="container pt-4 pl-0">  
    <form method="post" >
          <div>
            <h1 class="border-right">News Timeline <span class="border border-primary"></span>
            </h1>
            <hr>
          </div>	
          
      <div class="taskContainer table-responsive">
          
            <table class="table table-light table-bordered table-striped">
              <tr  class="bg-light">
                <th><h3>News Title</h3></th>
                <th><h3>News Description</h3></th>
                <th><h3>News Author</h3></th>
              </tr>  
              @foreach($jobposts as $jobpost)
              <tr>
                <td><h4>{{ $jobpost->job_title }}</h4></td>
                <td><h4>{{ $jobpost->job_description }}</h4></td>
                <td><h4>{{ $jobpost->job_address }}</h4></td>        
              </tr>
              @endforeach
            </table>
      </div>
    </form>    
    </div>
  </body>
</html>