

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Posting</title> 
</head>
<body>  
@include('header')
<div class="container pt-4 pl-0">  
    <form method="post" >
          <div>
            <h1 class="border-right">News Timeline <span class="border border-primary"></span>
              <a href="newpost" class="btn btn-primary btn-lg mx-4 bg-primary">Add Another News</a><br>
            </h1>
            <hr>
          </div>	
          
      <div class="taskContainer table-responsive">
          
            <table class="table table-light table-bordered table-striped">
              <tr  class="bg-light">
                <th><h3>News Title</h3></th>
                <th><h3>News Description</h3></th>
                <th><h3>News Author</h3></th>
                <th colspan="2"><h3>Action</h3></th>
              </tr>  
              @foreach($jobposts as $jobpost)
              <tr>
                <td><h4>{{ $jobpost->job_title }}</h4></td>
                <td><h4>{{ $jobpost->job_description }}</h4></td>
                <td><h4>{{ $jobpost->job_address }}</h4></td>
                <td>
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                  <a href="editjobpost/{{ $jobpost->id }}" class="btn btn-success btn-lg col-sm-15 border border-info" >Edit</a>
                  <a href="deletejobpost/{{ $jobpost->id }}" class="btn btn-danger btn-lg col-sm-15 border border-info" >Delete</a><br>
                  </div>
                   <!-- <a href="editjobpost/{{ $jobpost->id }}" class="btn btn-success col-sm-15 border border-info" >Edit</a>
                   <a href="deletejobpost/{{ $jobpost->id }}" class="btn btn-danger col-sm-15 border border-info" >Delete</a><br> -->
                </td>           
              </tr>
              @endforeach
          </table>
          <div class="col-12 text-center">
                {{ $jobposts->links() }}
          </div>
      </div>
    </form>    
    </div>
  </body>
</html>