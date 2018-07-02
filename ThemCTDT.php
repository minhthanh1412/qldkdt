<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=qldaotao; charset=utf8", "root", "" );
function fill_select_Nganh($connect)
{ 
 $output = '';
 $query = "SELECT * FROM tblnganh ORDER BY tenNganh ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["maNganh"].'">'.$row["tenNganh"].'</option>';
 }
 return $output;
}
function fill_select_HeDT($connect)
{ 
 $output = '';
 $query = "SELECT * FROM tblhedt ORDER BY tenHeDT ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["maHeDT"].'">'.$row["tenHeDT"].'</option>';
 }
 return $output;
}
function fill_select_BacDT($connect)
{ 
 $output = '';
 $query = "SELECT * FROM tblbacdaotao ORDER BY tenBac ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["maBac"].'">'.$row["tenBac"].'</option>';
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Thêm Chương trình Đào tạo</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet"/>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
    <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
    </script>
	</head>
  
<body>
  <div class="container-fluid">
     <a href="index.php"><img src="images/btn_home.png" style="width: 3%; margin-left: 0px" /></a>
	<center>

    <h2>Thêm Chương trình</h2>
	<div style="width: 100%;">
		<table  border="1px" id="CTDT" class="display" style="width:100%; border-color: #EEEEEE;">
	            <thead style="border-color: #EEEEEE;">
	                <tr>
	                    <th>Mã CT</th>
	                    <th>Tên Chương trình</th>
                      <th width="15%">Ngành Đào tạo <a href="ThemNganh.php"><button type="button" name="ThemNganh" id="ThemNganh" class="btn btn-success btn-sm add" data-toggel="tooltip" title="Thêm ngành Đào tạo"><span class="glyphicon glyphicon-plus"></span></button></a></th>
                      <th width="17%">Hệ Đào tạo</th>
                      <th  width="13%">Bậc Đào tạo</th>
                      <th>Tổng tín chỉ</th>
                      <th>Số học kì</th>
                      <th>Ghi chú</th>
                      <th width="5%"><button type="button" name="add" id="add" class="btn btn-success btn-sm add"  data-toggel="tooltip" title="Thêm Chương trình Đào tạo"><span class="glyphicon glyphicon-plus"></span></button></th>
	                </tr>
	            </thead>
	            <tbody>  
	            </tbody>
	    </table>
	</div>
    </center>
</div>
</body>
<script >
    $(document).ready(function() {
    var table = $("#CTDT").DataTable({
            ajax: 'LoadCTDT.php',
            select: true,
            columns: [
                { data: "maCT" },
                { data: "tenCT" },
                { data: "maNganh" },
                { data: "maHeDT" },
                { data: "maBacDT" },
                { data: "tongTC" },
                { data: "tongsoHK" },
                { data: "ghiChu" },
            ],
        });
     $(document).on('click', '.add', function(){
	       var html = '<tr>';
	       html += '<td></td>';
	       html += '<td contenteditable id="tenCT"></td>';
         html += '<td><select id= "maNganh"  class="form-control"><option value="">--Chọn Ngành--</option><?php echo fill_select_Nganh($connect); ?></select></td>';
         html += '<td><select id= "maHeDT"  class="form-control"><option value="">--Chọn Hệ DT--</option><?php echo fill_select_HeDT($connect); ?></select></td>';
         html += '<td><select id= "maBacDT"  class="form-control"><option value="">--Chọn Bậc DT--</option><?php echo fill_select_BacDT($connect); ?></select></td>';
         html += '<td contenteditable id="tongTC"></td>'
         html += '<td contenteditable id="tongsoHK"></td>';
         html += '<td contenteditable id="ghiChu"></td>';
	       html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>'
	       ;
	       html += '</tr>';
	       $('#CTDT tbody').prepend(html);
   	   });
       $(document).on('click', '#insert', function(){
         var tenCT = $('#tenCT').text();
         var maNganh = $('#maNganh').val();
         var maHeDT = $('#maHeDT').val();
         var maBac = $('#maBacDT').val();
         var tongTC = $('#tongTC').text();
         var tongsoHK = $('#tongsoHK').text();
         var ghiChu = $('#ghiChu').text();
         
         if(tenCT != '')
         {
          $.ajax({
           url:"AjaxAddCTDT.php",
           method:"POST",
           data:{tenCT: tenCT, maNganh: maNganh, maHeDT: maHeDT, maBacDT: maBac, tongTC: tongTC, tongsoHK: tongsoHK, ghiChu: ghiChu },
            success: function(data) {
               location.reload();
            },
         });
           
         }
         else
         {
          alert("Both Fields is required");
         }

       });
                
   
});
    </script>
</html>
