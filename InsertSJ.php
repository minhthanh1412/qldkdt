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
    <script src="js/dataTables.checkboxes.min.js"></script>
    <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow86.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
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
    <div class="container-fluid">
    <div  style="background-color: #EEEEEE">
    <div align="right">
         <button type="button" name="add" id="add" class="btn btn-info">Add</button>
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
</div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
    var table = $("#subjectEdit").DataTable({
            ajax: 'EditSJ.php',
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "pageLength": "50",
            select: true,
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
