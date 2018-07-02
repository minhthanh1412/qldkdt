<?php
include("connectDB.php");
 
  if(isset($_POST['Submit']))
  {
            $mamon = $conn -> real_escape_string($_POST['maMH']);
            $tenmon = $conn -> real_escape_string($_POST['tenMon']);
            $tomtat = $conn -> real_escape_string($_POST['moTa']);
           
            $LT = $conn -> real_escape_string($_POST['soTCLythuyet']);
            $TH = $conn -> real_escape_string($_POST['soTCThuchanh']);
            $Tuhoc = $conn -> real_escape_string($_POST['soTCTuhoc']);
             $TongTC = $LT + $TH +$Tuhoc;
            $ghiChu = $conn -> real_escape_string($_POST['ghiChu']);

            $Giaidoan = $conn -> real_escape_string($_POST['maGiaidoan']);
            $tenNhom = $conn -> real_escape_string($_POST['maNhom']);
            
        
            $sql ="INSERT INTO `tblmonhoc` (`maMH`, `tenMon`, `moTa`, `tongSoTC`, `soTCLythuyet`, `soTCThuchanh`, `soTCTuhoc`, `ghiChu`, `maGiaidoan`, `maNhom`) VALUES ('$mamon','$tenmon', '$tomtat', $TongTC, $LT, $TH, $Tuhoc, '$ghiChu', $Giaidoan, $tenNhom) ";
            echo $sql;
            if($conn ->query($sql) === TRUE)
                echo "Insert successfully!";
            else
                echo "Error! ". $conn->error;
            }

 ?>