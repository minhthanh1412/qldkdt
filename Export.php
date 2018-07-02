<?php
require("connectDB.php");
require("Classes/PHPExcel.php");
if(isset($_POST['btnExport']))
{
	$objExcel = new PHPExcel;
	$objExcel -> setActiveSheetIndex(0);
	$sheet = $objExcel -> getActiveSheet() -> setTitle("Monhoc");
	$rowCount =1;
	$sheet -> setCellValue('A'.$rowCount, "Mã Ngành");
	$sheet-> setCellValue('B'.$rowCount, "Tên ngành");
	$sheet -> getColumnDimension("B") ->setAutoSize(true);
	$sheet ->getStyle('A1:B1') -> getFill() -> setFillType(\PHPExcel_Style_Fill::FILL_SOLID) -> getStartColor() ->setARGB('00ffff00');
	$sheet->getStyle('A1:B1')->getAlignment() ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	$sql = "SELECT * FROM tblnganh";
	$result = $conn -> query($sql);

	while ($row = mysqli_fetch_array($result) ) {
		$rowCount++;
		$sheet -> setCellValue('A'.$rowCount, $row['maNganh']);
		$sheet-> setCellValue('B'.$rowCount, $row['tenNganh']);
	}
	$objWriter =  new PHPExcel_Writer_Excel2007($objExcel);
	$filename = 'Nganh.xlsx';
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
		<button name="btnExport" type = "submit">Export</button>
	</form>
</body>
</html>