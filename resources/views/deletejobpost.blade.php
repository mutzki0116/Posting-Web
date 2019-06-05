<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/app.css">  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('header')
    <div class="container pt-4 mr-2">  
      <form method="post" action="/deletejobpost/{{$jobpost->id}}">
        @method('DELETE')
        @csrf 
        <div class="row">
          <div class="col-xl-10">
            <label for="jobtitle" >Job Title:</label>
              <input type="text" class="form-control" placeholder="Job Title" name="job_title" value="{{$jobpost->job_title}}" required>
            <label for="jobtitle" class="pt-2">Job Description:</label>
              <input type="text" class="form-control" placeholder="Job Description" name="job_description" value="{{$jobpost->job_description}}" required>
            <label for="jobtitle" class="pt-2">Job Address:</label>
              <input type="text" class="form-control" placeholder="Job Address" name="job_address" value="{{$jobpost->job_address}}"required><br>
                <div>
                  <input type="submit" value="Delete Job Post" class="btn btn-success col-md-12">  
                </div> 
          </div> 
        </div>
      </form>
    </div>
</body>
</html>