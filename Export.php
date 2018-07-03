<?php
require("connectDB.php");
require("Classes/PHPExcel.php");
if(isset($_POST['btnExport']))
{
	$maCT =$_POST["CTDT"];
	$sqlTenCT = 'SELECT * FROM tblchuongtrinhdt WHERE maCT = '.$maCT;
	$rl = $conn->query($sqlTenCT);
	while ($rowCT = mysqli_fetch_array($rl)) {
		$tenCT = $rowCT["tenCT"];
	}
	$totalTC =0; $totalLT=0; $totalTH =0;
	$objExcel = new PHPExcel;
	$objExcel -> setActiveSheetIndex(0);
	$sheet = $objExcel -> getActiveSheet() -> setTitle("Monhoc");
	$rowCount =1;
	//Ten Chương trình
	$sheet -> setCellValue('A'.$rowCount, "$tenCT");
	$sheet->mergeCells("A".($rowCount).":F".($rowCount));
	$sheet -> getColumnDimension("A") ->setAutoSize(true);
	$sheet -> getColumnDimension("B") ->setAutoSize(true);
	$sheet -> getColumnDimension("C") ->setAutoSize(true);
	$sheet ->getStyle('A1:F1') -> getFill() -> setFillType(\PHPExcel_Style_Fill::FILL_SOLID) -> getStartColor() ->setARGB('00ffff00');
	$sheet->getStyle('A1:F1')->getAlignment() ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	// //In ra từng học kì
	$rowCount = $rowCount+1;

	for($i=1; $i<=8; $i++)
	{ 
		// $sheet ->getStyle('A'.$rowCount) -> getFill() -> setFillType(\PHPExcel_Style_Fill::FILL_SOLID) -> getStartColor() ->setARGB('0099ff');
		$sheet->getStyle('A'.$rowCount)->getAlignment() ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$sheet -> setCellValue('A'.$rowCount, "Học kì ". $i);
		$sheet->mergeCells("A".($rowCount).":F".($rowCount));
		$rowCount++; 
		$sumTC =0; $sumLT=0; $sumTH =0;
	
		$sheet ->getStyle('A'.$rowCount.':F'.$rowCount) -> getFill() -> setFillType(\PHPExcel_Style_Fill::FILL_SOLID) -> getStartColor() ->setARGB('33CCFF');
		$sheet->getStyle('A'.$rowCount.':F'.$rowCount)->getAlignment() ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$tam =$rowCount;
		$sheet -> setCellValue('A'.$rowCount, "id");
		$sheet-> setCellValue('B'.$rowCount, "Tên môn học");
		$sheet -> setCellValue('C'.$rowCount, "Tổng STC");
		$sheet-> setCellValue('D'.$rowCount, "Lý thuyết");
		$sheet -> setCellValue('E'.$rowCount, "Thực hành");
		$sheet-> setCellValue('F'.$rowCount, "Bắt buộc");
		
		$sql = "SELECT id, tenMon, tongSoTC, soTCLyThuyet, soTCThuchanh, batbuoc FROM tblmonhoc, tblchitietctdt WHERE tblmonhoc.id = tblchitietctdt.maMH AND tblchitietctdt.soTTHK = $i AND tblchitietctdt.maCT = $maCT";
		$result = $conn -> query($sql);

		while ($row = mysqli_fetch_array($result) ) {
			$rowCount++;
			$sheet -> setCellValue('A'.$rowCount, $row['id']);
			$sheet-> setCellValue('B'.$rowCount, $row['tenMon']);
			$sheet -> setCellValue('C'.$rowCount, $row['tongSoTC']);
			$sheet-> setCellValue('D'.$rowCount, $row['soTCLyThuyet']);
			$sheet -> setCellValue('E'.$rowCount, $row['soTCThuchanh']);
			if($row['batbuoc'] == 0)
				$sheet-> setCellValue('F'.$rowCount, "Không");
			else
			{
				$sheet-> setCellValue('F'.$rowCount, "Có");
				$sumTC = $sumTC +  $sheet->getCell( 'C'.$rowCount )->getValue();
				$sumLT = $sumLT +  $sheet->getCell( 'D'.$rowCount )->getValue();
				$sumTH = $sumTH +  $sheet->getCell( 'E'.$rowCount )->getValue();
			}
		}
		$totalTC+=$sumTC;
		$totalLT+=$sumLT;
		$totalTH+=$sumTH;
		$sheet->setCellValue('A'.($rowCount+1), "Tổng TC:");
		$sheet->mergeCells("A".($rowCount+1).":B".($rowCount+1));
		$sheet->setCellValue('C'.($rowCount+1), "$sumTC");
		$sheet->setCellValue('D'.($rowCount+1), "$sumLT");
		$sheet->setCellValue('E'.($rowCount+1), "$sumTH");
		$sheet->setCellValue('F'.($rowCount+1), "");
		$rowCount = $rowCount +2;
	}
	
		$sheet->setCellValue('A'.($rowCount+1), "Tổng TC:");
		$sheet->mergeCells("A".($rowCount+1).":B".($rowCount+1));
		$sheet->setCellValue('C'.($rowCount+1), "$totalTC");
		$sheet->setCellValue('D'.($rowCount+1), "$totalLT");
		$sheet->setCellValue('E'.($rowCount+1), "$totalTH");
		$sheet->setCellValue('F'.($rowCount+1), "");
		$sheet ->getStyle('A'.($rowCount+1).':F'.($rowCount+1)) -> getFill() -> setFillType(\PHPExcel_Style_Fill::FILL_SOLID) -> getStartColor() ->setARGB('33CCFF');

    $rowCount = $rowCount+1;
	$objWriter =  new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'Hocky.xlsx';
	$objWriter ->save($filename);

	header('Content-Disposition: attachment; filename="' . $filename . '"');  
	header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');  
	header('Content-Length: ' . filesize($filename));  
	header('Content-Transfer-Encoding: binary');  
	header('Cache-Control: must-revalidate');  
	header('Pragma: no-cache');  
	readfile($filename);  
	return;

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>ExportDT</title>
</head>
<body>
	<form method="POST">
		<select name="CTDT" data-toggel="tooltip" title="Danh sách các Chương trình Đào tạo">
			<option>----Chọn Chương trình Đào tạo----</option>
			<?php
			$sql = "select * from tblchuongtrinhdt";
			$rs = $conn-> query($sql);
			while ($row=$rs -> fetch_assoc()) {
				?>
				<option value="<?php echo $row["maCT"]; ?>"><?php echo $row["tenCT"]; ?></option>
				<?php
			}   
			?>

		</select>
		<button name="btnExport" type = "submit">Export</button>
	</form>
</body>
</html>