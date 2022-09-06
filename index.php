<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<title>LitmusBlox Task</title>

<body class="text-center text-lg-start">
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
  <div class="container py-4" style="width: 500px">
    <div class="card cascading-right">
      <div class="card-body p-5 ">
        <form method="POST">
          <h2 class="fw-bold mb-5 text-center">LitmusBlox Task Login</h2>
          <div class="form-outline mb-4">
            <label class="form-label">Username</label>
            <input type="text" name="username" onkeyup="verifyusername()" id="username_id" class="form-control" />
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="password_id">Password</label>
            <input type="password" name="password" onkeyup="verifyPassword()" id="password_id" class="form-control" />
          </div>

          <h6>
            <p class="form-check-label text-center" id="p1">
              Welcome to LitmusBlox
            </p>
          </h6>
          <button type="submit" name="Login" class="btn btn-primary btn-block mb-4 w-100">
            Sign in
          </button>
          <div class="text-center">
            <p>Not a member? <a href="register.php">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>

<script>
  function verifyusername() {
    var uname = document.getElementById("username_id").value;
    if (uname == "") {
      return false;
    }
    if (uname.length > 15) {
      document.getElementById("p1").innerHTML = "<span style='color: red; font-size:16px;'>Password length must not exceed 15 characters</span>";
      return false;
    } else {
      document.getElementById("p1").innerHTML = "<span style='color: green; font-size:16px;'>OK..!</span>";
    }
  }

  function verifyPassword() {
    var pw = document.getElementById("password_id").value;
    if (pw == "") {
      return false;
    }
    if (pw.length < 8) {
      document.getElementById("p1").innerHTML = "<span style='color: red; font-size:16px;'>Password Should be Greater than 8 characters</span>";
      return false;
    }
    if (pw.length > 15) {
      document.getElementById("p1").innerHTML = "<span style='color: red; font-size:16px;'>Password length must not exceed 15 characters</span>";
      return false;
    } else {
      document.getElementById("p1").innerHTML = "<span style='color: green; font-size:16px;'>OK..!</span>";
    }
  }
</script>

<?php
$db = pg_connect(getenv("DATABASE_URL"));
// $db = pg_connect("postgres://gvwygfsoxatuim:b8667744eb01c77620e1bc72b6f61bdb1931f36bf1f0d88035695cc80dffa394@ec2-34-246-86-78.eu-west-1.compute.amazonaws.com:5432/det5hvobuiil2u");
if (isset($_POST['Login'])) {
  $query = "select * from limtusbloxtask where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
  $res = pg_query($db, $query);
  if (pg_num_rows($res) > 0) {
    echo "<script>";
    echo "document.getElementById('p1').innerHTML='Success';";
    echo "window.location.assign('https://litmusblox.io/');";
    echo "</script>";
  } else {
    echo "<script>";
    echo "document.getElementById('p1').innerHTML='Username or Password Invalid';";
    echo "</script>";
  }
}
// echo $result;
?>