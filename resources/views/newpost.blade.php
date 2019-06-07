
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','News Posting')</title> 
</head>
<body>  
 @include('header')
<div class="container pt-4 mr-2">  
    <form method="post" action="newpost">
      <div class="row">
        <div class="col-xl-10">
          <label for="jobtitle" >News Title:</label>
            <input type="text" class="form-control" placeholder="News Title" name="job_title" required>
          <label for="jobtitle" class="pt-2">News Description:</label>
            <input type="text" class="form-control" placeholder="News Description" name="job_description" required>
          <label for="jobtitle" class="pt-2">News Author:</label>
            <input type="text" class="form-control" placeholder="News Author" name="job_address" required><br>
              <div>
                <input type="submit" value="Create News" class="btn btn-success col-md-12">  
              </div> 
        </div> 
      </div>

      @csrf
    </form>    
  </div>
  </body>
</html>