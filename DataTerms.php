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
 $Hocki = $_POST['Hocki'];
 $maCT = $_POST['maCT'];




/* create a prepared statement */
if ($stmt = $conn->prepare("SELECT id, tenMon, tongSoTC, soTCLyThuyet, soTCThuchanh, batbuoc FROM tblmonhoc, tblchitietctdt WHERE tblmonhoc.id = tblchitietctdt.maMH AND tblchitietctdt.soTTHK = ? AND tblchitietctdt.maCT = ?")) {

    /* bind parameters for markers */
    $stmt->bind_param("ii", $Hocki, $maCT);

    /* execute query */
    if($stmt->execute())
    {

	    /* bind result variables */
	    $stmt->bind_result($id, $tenMon, $tongSoTC, $soTCLyThuyet, $soTCThuchanh, $batbuoc);

	    /* fetch value */
	   while ( $stmt->fetch()) {
	    	$nestedData=array(); 

			$nestedData["id"] = $id;
			$nestedData["tenMon"] = $tenMon;
			$nestedData["tongSoTC"] = $tongSoTC;
			$nestedData["soTCLyThuyet"] = $soTCLyThuyet;
			$nestedData["soTCThuchanh"] = $soTCThuchanh;
			$nestedData["active"] = $batbuoc;

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
