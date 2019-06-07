<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
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
            <label for="jobtitle" >News Title:</label>
              <input type="text" class="form-control" placeholder="News Title" name="job_title" value="{{$jobpost->job_title}}" required>
            <label for="jobtitle" class="pt-2">News Description:</label>
              <input type="text" class="form-control" placeholder="News Description" name="job_description" value="{{$jobpost->job_description}}" required>
            <label for="jobtitle" class="pt-2">News Author:</label>
              <input type="text" class="form-control" placeholder="News Author" name="job_address" value="{{$jobpost->job_address}}"required><br>
                <div>
                  <input type="submit" value="Delete News Detail" class="btn btn-danger col-md-12">  
                </div> 
          </div> 
        </div>
      </form>
    </div>
</body>
</html>