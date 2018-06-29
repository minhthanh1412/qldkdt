<?php
/* Database connection start */
	include('connectDB.php');
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	
	0 =>'id', 
	1 => 'maMH',
	2 => 'tenMon',
	3 => 'moTa',
	4 => 'tongSoTC',
	5 => 'soTCLythuyet',
	6 => 'soTCThuchanh',
	7 => 'soTCTuhoc',
	8 => 'ghiChu',
	9 => 'maGiaidoan',
	10 => 'maNhom',
);

$sql = "SELECT * FROM tblmonhoc";
$query=mysqli_query($conn, $sql);
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData["id"] = $row["id"];
	$nestedData["maMH"] = $row["maMH"];
	$nestedData["tenMon"] = $row["tenMon"];
	$nestedData["moTa"] = $row["moTa"];
	$nestedData["tongSoTC"] = $row["tongSoTC"];
	$nestedData["soTCLythuyet"] = $row["soTCLythuyet"];
	$nestedData["soTCThuchanh"] = $row["soTCThuchanh"];
	$nestedData["soTCTuhoc"] = $row["soTCTuhoc"];
	$nestedData["ghiChu"] = $row["ghiChu"];
	// Lay ten Giai doan
	$sqlGD = "SELECT * FROM tblgiaidoan WHERE maGD = ". $row["maGiaidoan"];
	$queryGD=mysqli_query($conn, $sqlGD);
	while( $rowGD=mysqli_fetch_array($queryGD) ) {  // preparing an array
	 	$nestedData["maGiaidoan"] =$rowGD["tenGD"];
	}
	// Lay ten Nhom
	$sqlNhom = "SELECT * FROM tblnhom WHERE maNhom = ". $row["maNhom"];
	$queryNhom=mysqli_query($conn, $sqlNhom);
	while( $rowNhom=mysqli_fetch_array($queryNhom) ) {  // preparing an array
	 	$nestedData["maNhom"] =$rowNhom["tenNhom"];
	}
	
	$data[] = $nestedData;
}
$sj_data = array(
			"data"            => $data   // total data array
			);

echo json_encode($sj_data);  // send data as json format

?>
