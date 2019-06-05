

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Posting</title> 
</head>
<body>  
@include('header')
<div class="container pt-4">  
    <form method="post" >
          <div>
            <h1>Job Posts</h1><hr>
          </div>	
      <div class="taskContainer table-responsive">
          <div>
            <a href="newpost" class="btn btn-primary col-sm ">Add new Job Post</a><br>
          </div>
            <table class="table table-light table-bordered table-striped">
              <tr  class="bg-light">
                <th><h4>Job Title</h4></th>
                <th><h4>Job Description</h4></th>
                <th><h4>Address</h4></th>
                <th><h4>Action</h4></th>
              </tr>  
              @foreach($jobposts as $jobpost)
              <tr>
                <td>{{ $jobpost->job_title }}</td>
                <td>{{ $jobpost->job_description }}</td>
                <td>{{ $jobpost->job_address }}</td>
                <td>
                   <a href="editjobpost/{{ $jobpost->id }}" class="btn btn-success col-sm-5" >Edit</a>
                   <a href="deletejobpost/{{ $jobpost->id }}" class="btn btn-danger col-sm-5" >Delete</a><br>
                </td>           
              </tr>
              @endforeach
            </table>
      </div>
    </form>    
    </div>
  </body>
</html>