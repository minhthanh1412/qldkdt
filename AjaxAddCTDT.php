<?php
include "connectDB.php";
if(isset( $_POST["tenCT"]) )
{
 $tenCT = mysqli_real_escape_string($conn, $_POST["tenCT"]);
 $maNganh = mysqli_real_escape_string($conn, $_POST["maNganh"]);
 $maHeDT = mysqli_real_escape_string($conn, $_POST["maHeDT"]);
 $maBacDT = mysqli_real_escape_string($conn, $_POST["maBacDT"]);
 $tongTC = mysqli_real_escape_string($conn, $_POST["tongTC"]);
 $tongsoHK = mysqli_real_escape_string($conn, $_POST["tongsoHK"]);
 $ghiChu = mysqli_real_escape_string($conn, $_POST["ghiChu"]);
 $query = "INSERT INTO `tblchuongtrinhdt`( tenCT, maNganh, maHeDT, maBacDT, tongTC, tongsoHK, ghiChu) VALUES ('$tenCT',$maNganh,$maHeDT, $maBacDT,$tongTC,$tongsoHK,'$ghiChu')";
 if(mysqli_query($conn, $query))
 {
  echo 'Data Inserted';
 }
  
}
?>