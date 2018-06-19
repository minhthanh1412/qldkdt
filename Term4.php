<?php
/* Database connection start */
	include('connectDB.php');
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	
	0 =>'id', 
	1 => 'tenMon',
	2 => 'tongSoTC',
	3 => 'soTCLyThuyet',
	4 => 'soTCThuchanh',
);

$sql = "SELECT id, tenMon, tongSoTC, soTCLyThuyet, soTCThuchanh FROM tblmonhoc, tblchitietctdt WHERE tblmonhoc.id = tblchitietctdt.maMH AND tblchitietctdt.soTTHK = 4";
$query=mysqli_query($conn, $sql);
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["id"];
	$nestedData[] = $row["tenMon"];
	$nestedData[] = $row["tongSoTC"];
	$nestedData[] = $row["soTCLyThuyet"];
	$nestedData[] = $row["soTCThuchanh"];


	//$nestedData[] = $row["employee_age"];
	
	$data[] = $nestedData;
}



$sj_data = array(
			"data"            => $data   // total data array
			);

echo json_encode($sj_data);  // send data as json format

?>
