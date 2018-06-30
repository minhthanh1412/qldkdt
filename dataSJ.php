<?php
/* Database connection start */
	include('connectDB.php');
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
//datatable column index  => database column name
	
	0 => 'id', 
	1 => 'tenMon',
	2 => 'tongSoTC',
	3 => 'soTCLyThuyet',
	4 => 'soTCThuchanh',
);
$maCT = $_POST['maCT'];
if ($stmt = $conn->prepare("SELECT tblmonhoc.id,tblmonhoc.tenMon, tblmonhoc.tongSoTC, tblmonhoc.soTCLyThuyet, tblmonhoc.soTCThuchanh FROM tblmonhoc WHERE tblmonhoc.id NOT IN(SELECT maMH FROM tblchitietctdt WHERE tblchitietctdt.maCT = ?)")) {
// SELECT tblmonhoc.id,tblmonhoc.tenMon, tblmonhoc.tongSoTC, tblmonhoc.soTCLyThuyet, tblmonhoc.soTCThuchanh, tblnganh.tenNganh FROM tblmonhoc, tblmonhoc_nganh, tblchuongtrinhdt, tblnganh
// WHERE tblmonhoc_nganh.maMH = tblmonhoc.id AND tblnganh.maNganh = tblchuongtrinhdt.maNganh AND tblchuongtrinhdt.maCT = 1
    /* bind parameters for markers */
    $stmt->bind_param("i", $maCT);

    /* execute query */
    if($stmt->execute())
    {

	    /* bind result variables */
	    $stmt->bind_result($id, $tenMon, $tongSoTC, $soTCLyThuyet, $soTCThuchanh);

	    /* fetch value */
	   while ( $stmt->fetch()) {
	    	$nestedData=array(); 

			$nestedData["id"] = $id;
			$nestedData["tenMon"] = $tenMon;
			$nestedData["tongSoTC"] = $tongSoTC;
			$nestedData["soTCLyThuyet"] = $soTCLyThuyet;
			$nestedData["soTCThuchanh"] = $soTCThuchanh;
			$data[] = $nestedData;
	    }
	    
	   	
	    /* close statement */
	    $stmt->close();
	}


}
$sj_data = array(
			"data"            => $data   // total data array
			);
echo json_encode($sj_data);  // send data as json format
/* close connection */

$conn->close();
?>
