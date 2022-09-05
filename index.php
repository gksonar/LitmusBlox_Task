<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<title>LitmusBlox Task</title>

<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4" style="    width: 500px">

    <div class="card cascading-right">
      <div class="card-body p-5 ">
        <h2 class="fw-bold mb-5">Sign up now</h2>
        <form>
          <div class="row">

            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email address</label>
              <input type="email" id="form3Example3" class="form-control" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control" />
            </div>

            <!-- Checkbox -->


            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
        </form>
      </div>


    </div>
  </div>
  <!-- Jumbotron -->
</section>


<body>
  <form class="pt-3" action="" method="POST">
    <div class="form-outline mb-4">
      <input type="text" name="username" class="form-control" />
      <label class="form-label" for="form2Example1">Username</label>
    </div>



    <div class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" />
      <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" name="Login">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <p id="p1"></p>
  </form>
</body>

</html>
<!-- Section: Design Block -->

<!-- Section: Design Block -->







<?php
include 'db.php';
// echo getenv('path');
if (isset($_POST['Login'])) {
  $query = "select * from litmusbloxtask where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
  $res = mysqli_query($con, $query) or die(mysqli_error($con));
  if (mysqli_num_rows($res) > 0) {
    echo "<script>";
    echo "document.getElementById('p1').innerHTML='Success';";
    echo "</script>";
  } else {
    echo "<script>";
    echo "document.getElementById('p1').innerHTML='Username or Password Invalid';";
    echo "</script>";
  }
}
?>