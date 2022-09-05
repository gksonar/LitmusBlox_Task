
<!-- <!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="insert.php" method="POST" >
<li>Book ID:</li><li><input type="text" name="bookid" /></li>
<li>Book Name:</li><li><input type="text" name="book_name" /></li>
<li>Author:</li><li><input type="text" name="author" /></li>
<li>Publisher:</li><li><input type="text" name="publisher" /></li>
<li>Date of publication:</li><li><input type="text" name="dop" /></li>
<li>Price (USD):</li><li><input type="text" name="price" /></li>
<li><input type="submit" /></li>
</form>
</ul>
</body> -->

<!-- </html> -->
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

  <!-- Jumbotron -->
  <div class="container py-4" style="    width: 500px">

    <div class="card cascading-right">
      <div class="card-body p-5 ">
        <form method="POST">
          <div class="row">
             <h2 class="fw-bold mb-5 text-center">LitmusBlox Task</h2>
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email address</label>
              <input type="text" name="username" id="form3Example3" class="form-control" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4">Password</label>
              <input type="password" name="password" onkeyup="verifyPassword()" id="form3Example4" class="form-control" />
            </div>

           <div class="form-check d-flex justify-content-center mb-4">
                <p class="form-check-label" id="p1">
                  Subscribe to our newsletter
                </p>
            </div>
            <!-- Checkbox -->


            <button type="submit" name="Login" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
        </form>
      </div>


    </div>
  </div>
  <!-- Jumbotron -->
</body>
</html>

<script>  
function verifyPassword() {  
  var pw = document.getElementById("form3Example4").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("p1").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("p1").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("p1").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     document.getElementById("p1").innerHTML = "OK !!!!";  
  }  
}  
</script>

<?php

$db=pg_connect(getenv("DATABASE_URL"));

if (isset($_POST['Login'])) {
    $query = "select * from litmusbloxtask where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
    $res = pg_query($db, $query);
    if (pg_num_rows($res) > 0) {
      echo "<script>";
      echo "document.getElementById('p1').innerHTML='Success';";
      echo "</script>";
    } else {
      echo "<script>";
      echo "document.getElementById('p1').innerHTML='Username or Password Invalid';";
      echo "</script>";
    }
}
// echo $result;
?>