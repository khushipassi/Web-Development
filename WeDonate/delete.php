<?php

include("check.php");
error_reporting(0);

$fullName = $_GET['fn'];
$query = "DELETE FROM ASSIST WHERE fullName='$fullName'";

$data = mysqli_query($conn, $query);

if ($data) {
	echo "<script>alert('Record Deleted from database')</script>";
?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=donors.php">
<?php
} else {
	echo "<font color='red'>Failed to delete record from database";
}

?>