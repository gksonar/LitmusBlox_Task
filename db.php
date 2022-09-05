
<?php
$con = mysqli_connect("
db4free.net", "gsonar", "gauravsonar", "litmusbloxtest") or die(mysqli_error($con));
if (mysqli_connect_errno()) {
	echo mysqli_connect_errno();
}
?>
