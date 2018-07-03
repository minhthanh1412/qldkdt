<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm môn học</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/btn_top.js"></script>
    <link rel="stylesheet" href="css/btn_top.css" >
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow86.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  



<link rel ="stylesheet" href="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        h4{
            text-align: center;
        }       
    </style>
    <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
    </script>
</head>
<body>
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
                if($conn ->query($sql) === TRUE)
                echo "Insert successfully!";
            else
                echo "Error! ". $conn->error;
    }
    ?>
    <div class="container-fluid">
             <a href="index.php"><img src="images/btn_home.png" style="width: 3%; margin-left: 0px" /></a>
    <div id="InsertSJ">
    <div class="wrapper">
        <form action='' method='POST' name="form_Themmon" class="form_Themmon">   
            <div class="row" >
              <div class ="col-md-offset-1 col-md-4">
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
              <div class="col-md-offset-1 col-md-4">

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
                    <textarea class="form-control" name="ghiChu" style="width: 100%; height: 100px" placeholder="Nhập ghi chú..."></textarea>
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
                
         </div>
     </div>
            <center>
                      <button style="width: 120px; text-align: center;" class="btn btn-lg btn-primary btn-block" type="Submit"  name="Submit" >Thêm</button>     
            </center> 
    </form>     
    
</div>
    <h3 style="text-align: center;">DANH SÁCH MÔN HỌC</h3>
        
        <table id="subjectEdit" class="display" style="width:100%; height: 500px;">
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
            <tbody>  
            </tbody>
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
                    <th width="2%">Giai đoạn</th>
                    <th width="2%">Nhóm</th>
                </tr>
            </tfoot>
        </table>
    </div>
</form>
</div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
    var table = $("#subjectEdit").DataTable({
       
            ajax: 'EditSJ.php',
              select: {
            style: 'single'
        },
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "pageLength": "50",
           
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
            className: "dt-body-center",
        }) ;
});
   //   $('#add').click(function(){
   //     var html = '<tr>';
   //     html += '<td contenteditable id="data1"></td>';
   //     html += '<td contenteditable id="data2"></td>';
   //     html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   //     html += '</tr>';
   //     $('#subjectEdit tbody').prepend(html);
   // });
</script>
</html>