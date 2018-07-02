<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Export data to PDF,Excel</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>


	
	<div class="container" style="padding:20px;20px;">
        <div id="InsertSJ">
    <div class="wrapper">
        <form action='ThemMon.php' method='POST' name="form_Themmon" class="form_Themmon">   
            <div class="row" >
              <div class ="col-md-offset-1 col-md-5">
                  <div class ="form-group">
                    <label>Mã MH:</label>
                    <input type="text" class="form-control" name="maMH" placeholder="Nhập mã Môn học...">
                  </div>
                  <div class ="form-group">
                    <label>Tên MH:</label>
                    <input type="text" class="form-control" name="tenMon" placeholder="Nhập tên Môn học...">
                  </div>
                  <div class ="form-group">
                    <label>Mô tả:</label>
                    <textarea class="form-control" name="moTa" style="width: 100%; height: 100px" placeholder="Nhập mô tả..."></textarea>
                  </div>
                  <div class ="form-group">
                    <label>Lý thuyết:</label>
                    <input type="number" class="form-control" name="soTCLythuyet" placeholder="Nhập số TC Lý thuyết...">
                  </div>
              </div>
              <div class="col-md-offset-1 col-md-5">

                  <div class ="form-group">
                    <label>Thực hành:</label>
                    <input type="number" class="form-control" name="soTCThuchanh" placeholder="Nhập số TC Thực hành...">
                  </div>
                <div class ="form-group">
                    <label>Tự học:</label>
                    <input type="number" class="form-control" name="soTCTuhoc" placeholder="Nhập số TC Tự học...">
                </div>
                <div class ="form-group">
                    <label>Ghi chú:</label>
                    <textarea class="form-control" name="moTa" style="width: 100%; height: 100px" placeholder="Nhập ghi chú..."></textarea>
                  </div>
                <div class ="form-group">
                    <label>Giai đoạn:</label>
                    <select name="maGiaidoan"  style="width: 80%;">
                        <option>----Chọn Giai đoạn----</option>
                        <?php
                            include 'connectDB.php';
                            $sql = "select * from tblgiaidoan";
                            $rs = $conn-> query($sql);
                            while ($row=$rs -> fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row["maGD"]; ?>"><?php echo $row["tenGD"]; ?></option>
                                <?php
                            }   
                        ?>
                    </select>
                </div>
                <div class ="form-group">
                    <label>Nhóm:</label>
                    <select name="maNhom" style="width: 80%">
                        <option>----Chọn Nhóm----</option>
                        <?php
                            include 'connectDB.php';
                            $sql = "select * from tblnhom";
                            $rs = $conn-> query($sql);
                            while ($row=$rs -> fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row["maNhom"]; ?>"><?php echo $row["tenNhom"]; ?></option>
                                <?php
                            }   
                        ?>
                    </select>
                </div>
                <div class ="form-group">   
                      <button style="width: 220px; text-align: center;" class="btn btn-lg btn-primary btn-block" type="Submit"  name="Submit" >Thêm</button>     
                </div>
         
        </form>     
    </div>
</div>
      <div class="">
        <h1>Data Table with Export features Using PHP server-side</h1>
        <div class="">
		<table id="employee_grid" class="display" width="100%">
        <thead>
            <tr>
                 <th width="2%">id</th>
                    <th width="2%">Mã MH</th>
                    <th width="20%">Tên MH</th>
                    <th width="50%">Mô tả</th>
                    <th width="2%">Tổng TC</th>
                    <th width="2%">LT</th>
                    <th width="2%">TH</th>
                    <th width="2%">Tự học</th>
                    <th width="2%">Ghi chú</th>
                    <th width="5%">Giai đoạn</th>
                    <th width="30%">Nhóm</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th width="2%">id</th>
                    <th width="2%">Mã MH</th>
                    <th width="20%">Tên MH</th>
                    <th width="50%">Mô tả</th>
                    <th width="2%">Tổng TC</th>
                    <th width="2%">LT</th>
                    <th width="2%">TH</th>
                    <th width="2%">Tự học</th>
                    <th width="2%">Ghi chú</th>
                    <th width="5%">Giai đoạn</th>
                    <th width="30%">Nhóm</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
      </div>

    </div>

<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
		 "processing": true,
         "ajax":"EditSJ.php",
		 "dom": 'lBfrtip',
          columns: [
                { data: "id" },
                { data: "maMH" },
                { data: "tenMon" },
                { data: "moTa" },
                { data: "tongSoTC" },
                { data: "soTCLythuyet" },
                { data: "soTCThuchanh" },
                { data: "soTCTuhoc" },
                { data: "ghiChu" },
                { data: "maGiaidoan" },
                { data: "maNhom" },
            ],
		 "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'excel',
                ]
            }
        ]
        });
});
</script>
