<?php
/* Database connection start */
	include('connectDB.php');
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
//datatable column index  => database column name
	
	0 => 'maNganh', 
	1 => 'tenNganh',
);
$sql = "SELECT * FROM tblnganh ";
$query=mysqli_query($conn, $sql);
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData["maNganh"] = $row["maNganh"];
	$nestedData["tenNganh"] = $row["tenNganh"];
	$data[] = $nestedData;
}
$sj_data = array(
			"data"            => $data   // total data array
			);
echo json_encode($sj_data);  // send data as json format
/* close connection */

$conn->close();
?>
