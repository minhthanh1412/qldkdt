<?php
	require("connectDB.php");
	require("Classes\PHPExcel.php");
	if(isset($_POST["Import"])){
		$file = $_FILES['file']['tmp_name'];
		
		$objReader= PHPExcel_IOFactory::createReaderForFile($file);
		$objReader->setLoadSheetsOnly('monhoc');

		$objExcel = $objReader->load($file);
		$sheetData = $objExcel->getActiveSheet()->toArray('null',true, true, true);

		$highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
		echo $highestRow;
		
		for($row = 2; $row <= $highestRow; $row++)
		{
			$mamon = $sheetData[$row]['A'];
			$tenmon = $sheetData[$row]['B'];
			$tomtat = $sheetData[$row]['C'];
			$TongTC = $sheetData[$row]['D'];
			$LT = $sheetData[$row]['E'];
			$TH = $sheetData[$row]['F'];
			$Tuhoc = $sheetData[$row]['G'];
			$ghiChu = $sheetData[$row]['H'];

			$Giaidoan = $sheetData[$row]['I'];
			$tenNhom = $sheetData[$row]['J'];
			
		
			$sql ="INSERT INTO `tblmonhoc` (`maMH`, `tenMon`, `moTa`, `tongSoTC`, `soTCLythuyet`, `soTCThuchanh`, `soTCTuhoc`, `ghiChu`, `maGiaidoan`, `maNhom`) VALUES ('$mamon','$tenmon', '$tomtat', $TongTC, $LT, $TH, $Tuhoc, '$ghiChu', $Giaidoan, $tenNhom) ";
			echo $sql;
			if($conn ->query($sql) === TRUE)
				echo "Insert successfully!";
			else
				echo "Error! ". $conn->error;
		}

		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Import du lieu Excel</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	 <a href="index.php"><img src="images/btn_home.png" style="width: 3%; margin-left: 0px" /></a>
	<form method="POST" enctype="multipart/form-data">
		<a href="MauEX/DSMonhoc.xlsx">Tải file mẫu tại đây!</a>
		<input type="file" name="file">
		<button type ="submit" name ="Import">Import</button>
	</form>
</body>
</html>
