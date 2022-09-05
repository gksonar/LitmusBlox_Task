
<?php
$con = mysqli_connect("localhost", "root", "", "litmusblox_task") or die(mysqli_error($con));
if (mysqli_connect_errno()) {
	echo mysqli_connect_errno();
}
?>
