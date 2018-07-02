<?php
include "connectDB.php";
if(isset( $_POST["tenNganh"]))
{
 $tenNganh = mysqli_real_escape_string($conn, $_POST["tenNganh"]);
 $query = "INSERT INTO tblnganh(tenNganh) VALUES('$tenNganh')";
 if(mysqli_query($conn, $query))
 {
  echo 'Data Inserted';
 }
  
}
?>