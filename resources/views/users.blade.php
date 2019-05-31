<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Composer Project in our OJT</title> 
</head>
<body>  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="homepage.php"><img src="_images/ha-logo.png" width="40" height="40" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="heroProfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="heroRankings.php">Rankings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tasks.php">Task</a>
      </li>
  </div>
  
  <form method="post" action="#">
    <input type="submit" name="logout" value="Logout" class="btn btn-outline-secondary">
  </form>
  </nav>
    <div>
        <table>
            <th>Author</th>
            <th>Headline</th>
            <th>Date</th>
        </table>
    </div>
</body>
</html>