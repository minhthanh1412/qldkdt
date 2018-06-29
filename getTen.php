<?php
/* Database connection start */
	include('connectDB.php');

$sql = "SELECT * FROM tblmonhoc WHERE id = 1";
$query=mysqli_query($conn, $sql);
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
 	$a =$row["tenMon"];
}
echo $a;
?>
