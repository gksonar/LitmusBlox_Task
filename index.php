<html>

<head></head>
<title>LitmusBlox Task</title>

<body>
  <form class="pt-3" action="" method="POST">
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



<?php
include 'db.php';
if (isset($_POST['Login'])) {
  $query = "select * from userauthentication where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
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