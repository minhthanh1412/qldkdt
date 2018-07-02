<?php
/* Database connection start */
	include('connectDB.php');
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
//datatable column index  => database column name
	
	0 => 'maCT', 
	1 => 'tenCT',
	2 => 'maNganh',
	3 => 'maHeDT',
	4 => 'maBacDT',
	5 => 'tongTC',
	6 => 'tongsoHK',
	7 => 'ghiChu',
);
$sql = "SELECT * FROM tblchuongtrinhdt";
$query=mysqli_query($conn, $sql);
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData["maCT"] = $row["maCT"];
	$nestedData["tenCT"] = $row["tenCT"];
	// Lay ten Nganh
	$sqlNganh = "SELECT * FROM tblnganh WHERE maNganh = ". $row["maNganh"];
	$queryNganh=mysqli_query($conn, $sqlNganh);
	while( $rowNganh=mysqli_fetch_array($queryNganh) ) {  // preparing an array
	 	$nestedData["maNganh"] =$rowNganh["tenNganh"];
	}
	// Lay ten He
	$sqlHeDT = "SELECT * FROM tblhedt WHERE maHeDT = ". $row["maHeDT"];
	$queryHeDT=mysqli_query($conn, $sqlHeDT);
	while( $rowHeDT=mysqli_fetch_array($queryHeDT) ) {  // preparing an array
	 	$nestedData["maHeDT"] =$rowHeDT["tenHeDT"];
	}

	$sqlBacDT = "SELECT * FROM tblbacdaotao WHERE maBac = ". $row["maBacDT"];
	$queryBacDT=mysqli_query($conn, $sqlBacDT);
	while( $rowBacDT=mysqli_fetch_array($queryBacDT) ) {  // preparing an array
	 	$nestedData["maBacDT"] =$rowBacDT["tenBac"];
	}
	$nestedData["tongTC"] = $row["tongTC"];
	$nestedData["tongsoHK"] = $row["tongsoHK"];
	$nestedData["ghiChu"] = $row["ghiChu"];
	$data[] = $nestedData;
}
$sj_data = array(
			"data"            => $data   // total data array
			);
echo json_encode($sj_data);  // send data as json format
/* close connection */

$conn->close();
?>
