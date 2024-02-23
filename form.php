<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Get/Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST["email"];
      $name = $_POST["name"];
      $des = $_POST["desc"];
  
      // echo '<div class="alert alert-primary d-flex align-items-center" role="alert">
      //     <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      //     <symbol id="check-circle-fill" viewBox="0 0 16 16">
      //       <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      //     </symbol>
      //      <strong> Success!</strong> Your email ' . $name . ' and description ' . $des . ' submitted successfully.
      //     </div>';
  
      // connecting to the database
      $server = 'localhost';
      $username = "root";
      $password = "";
      $database = "contactus";
  
      // create a connection
      $conn = mysqli_connect($server, $username, $password ,$database);
      if (!$conn) {
          die("sorry we failed to connect" . mysqli_connect_error());
      } else {
          // echo "Connection was successfully";
          $sql = "INSERT INTO `concern` (`name`, `email`, `concern`) VALUES ('$name', '$email', '$des')";
          $result = mysqli_query($conn, $sql);
          // echo var_dump($result);
          if($result){
            echo '<div class="alert alert-primary d-flex align-items-center" role="alert">
             <strong> Success!</strong> Your entry has been submited succesfully.
            </div>';
          }
          else{
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <strong> Error!</strong> Your  are facing some technical issue and  your entry was not submited succesfully we regret the inconvience cause.
           </div>';
          }
      }
  }
  ?>

    <div class="container mt-4">
      <form action="/Vaishu/form.php" method="post">
        <h3>Contact us for concern</h3>
        <div class="row mb-3 mt-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="name">
          </div>
        </div>
        <div class="row mb-3 mt-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="email">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
          <textarea class="form-control" id="inputPassword3" name="desc"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

