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
	5 => 'batbuoc',
);

 
$sql = "SELECT id, tenMon, tongSoTC, soTCLyThuyet, soTCThuchanh, batbuoc FROM tblmonhoc, tblchitietctdt 
	WHERE tblmonhoc.id = tblchitietctdt.maMH AND tblchitietctdt.soTTHK = 1 ";
$query=mysqli_query($conn, $sql);
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData["id"] = $row["id"];
	$nestedData["tenMon"] = $row["tenMon"];
	$nestedData["tongSoTC"] = $row["tongSoTC"];
	$nestedData["soTCLyThuyet"] = $row["soTCLyThuyet"];
	$nestedData["soTCThuchanh"] = $row["soTCThuchanh"];
	$nestedData["active"] = $row["batbuoc"];

	
	$data[] = $nestedData;
}



$sj_data = array(
			"data"            => $data   // total data array
			);

echo json_encode($sj_data);  // send data as json format

?>
