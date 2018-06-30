<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý chương trình Đào tạo!</title>
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
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.19/api/sum().js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    
    <!-- <script type="text/javascript">
        function load_ajax(){
            

                "ajax": {
                "url": "dataTbl1.php",
                "type": "POST"

                 },

        
        }
    </script> -->
    <style type="text/css">

        div.header {
                line-height:30px;
                text-align: center;
        }
       .btn-success{
            width: 50px;
            margin-top: 10px;
        }
        .buttons{
            margin-top: -10px;
        }
        .tblmargin{
            margin-top: 10px;
            background-color: #C0C0C0;
        }
        h4{
            text-align: center;
        }
        .btn_top {
            background-image: url(../images/btn_top.png);
            background-repeat: no-repeat;
            border: medium none;
            bottom: 20px;
            cursor: pointer;
            display: none;
            height: 50px;
            outline: medium none;
            padding: 0;
            position: fixed;
            right: 20px;
            width: 50px;
            z-index: 9999;
        }
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
       
    </style>

</head>
<body>
    
    <div class="header"><h1>QUẢN LÝ CHƯƠNG TRÌNH ĐÀO TẠO </h1></div>
    <?php
    require("connectDB.php");
    ?>
    <div class ="selCTDT" style="text-align: center;">
        <form  name="frmCapNhat" id="frmCapNhat" method="POST">
            <div class="form-group">
            <a href="importexcel.php" data-toggel="tooltip" title="Thêm Chương trình Đào tạo!">...</a>
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
                        <option value="2">MMT</option>

            </select>
            <button type="submit" name = "getCT" id ="getCT" class="btn btn-primary" data-toggel="tooltip" title="Chọn Chương trình Đào tạo!">Chọn</button>       
            </div> 
            </form>
    </div>
    <div class="container-fluid">
        <!-- Bang tam chua du lieu insert chi tiet -->
        <form name='form_getDL' style="display: none">
          <table align = "">
            <tr><td></td></tr>
             <tr>
                <td>
                  <label>Mã Chương trình:</label>&nbsp;
                </td>
                <td>
                  <input type='text' name='maCT' id='maCT' value="<?php echo $_POST["CTDT"]; ?>"><br />
                </td>
              </tr>
              <tr>
                <td>
                    <label>Mã Môn học:</label>&nbsp;
                </td>
                <td>
                  <input type='text' name='maMH' id = 'maMH'><br />
                </td>
              </tr>
              <tr>
                <td>
                  <label>Học kì: </label>&nbsp;
                </td>
                <td>
                  <input type='text' name='Hocki' id='Hocki'><br />
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                  <input class='btn' type="button" id = "saveusers" value = "Save" />
                </td>
              </tr>
          </table>      
        </form>

        <!-- Bang mon hoc -->
        <div class="row">
            <div class="col-md-5" style="background-color: #EEEEEE">
                <h3 style="text-align: center;">DANH SÁCH MÔN HỌC</h3>
     <!--            <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add</button>
    </div> -->
                <table id="subject" class="display" style="width:100%; height: 500px;">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Tên Môn học</th>
                                <th>STC</th>
                                <th>LT</th>
                                <th>TH</th>
                            </tr>
                        </thead>
                        <tbody>  
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Tên Môn học</th>
                                <th>Số Tín chỉ</th>
                                <th>LT</th>
                                <th>TH</th>   
                            </tr>
                        </tfoot>
                </table>
            </div>
            <!-- Cot cac button -->
            <div class="col-md-1 text-center" >
                    <!-- Button  -->
                  <div class="buttons" id ="buttons" style="position: fixed; z-index: 9999999" >
                    <button class="btn btn-success" id="btn_Them" > I--> </button>
                    <button class="btn btn-success" id="btn_Trave" > I<--  </button><br>
                   
                    <button class="btn btn-success" id="btn_Them2" > II--> </button>
                    <button class="btn btn-success" id="btn_Trave2"> II<--  </button><br>

                    <button class="btn btn-success" id="btn_Them3"> III--> </button>
                    <button class="btn btn-success" id="btn_Trave3"> III<--  </button><br>

                    <button class="btn btn-success" id="btn_Them4"> IV--> </button>
                    <button class="btn btn-success" id="btn_Trave4" > IV<--  </button><br>

                    <button class="btn btn-success" id="btn_Them5" > V--> </button>
                    <button class="btn btn-success" id="btn_Trave5"> V<--  </button><br>

                    <button class="btn btn-success" id="btn_Them6" > VI--> </button>
                    <button class="btn btn-success" id="btn_Trave6"> VI<--  </button><br>

                    <button class="btn btn-success" id="btn_Them7" > VII--> </button>
                    <button class="btn btn-success" id="btn_Trave7" > VII<--  </button><br>

                    <button class="btn btn-success" id="btn_Them8"> VIII--> </button>
                    <button class="btn btn-success" id="btn_Trave8"> VIII<--  </button><br>
            </div>
        </div>
           
            <div class="col-md-6">
                 <!-- Bang cac Hki -->
                 
            <input readonly="" align="center" name ="save" id ="save" class="btn btn-primary" data-toggel="tooltip" title="Lưu Chương trình Đào tạo!" value="Lưu Chương trình"></input> 
           <button style="width: 100px" onclick="myFunction()"  name ="ShowTC" id ="ShowTC" class="btn btn-primary" data-toggel="tooltip" title="Nhấn để xem số Tín chỉ của chương trình">Xem TC</button> 
            <div id="ClassTC" style="visibility: hidden;">
                <label align="right">Tổng TC:</label>
                <input align="right" type="text" readonly="" id="txtTongTC" style="width: 50px">

                <label align="right">LT:</label>
                <input align="right" type="text" readonly="" id="txtTongTCLT" style="width: 50px">

                <label align="right">TH:</label>
                <input align="right" type="text" readonly="" id="txtTongTCTH" style="width: 50px">
            </div>
                <!-- I -->
            <div class ="tblmargin" id="hk1">
                <h4>Học kỳ I</h4>

                        <table border="1px" id="Term1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">id</th>
                                        <th width="75%">Tên Môn học</th>
                                        <th width="5%">STC</th>
                                        <th width="5%">LT</th>
                                        <th width="5%">TH</th>
                                        <th width="5%">Bắt buộc</th>
                                    </tr>
                                </thead>
                               <tbody>
                              </tbody>
                              <!-- <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result1"></output></th>
                                  <th><output id="resultlt1"></output></th>
                                  <th><output id="resultth1"></output></th>
                              </tfoot> -->
                              <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                              </tfoot>
                        </table>
            </div>
            <div class ="tblmargin" id="hk2" style="">
                <!-- II -->
            <h4>Học kỳ II</h4>
                    <table border="1px" id="Term2" class="display" style="width:100%;">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                             <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                              </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk3" style="">
                <!-- III -->
            <h4>Học kỳ III</h4>
                    <table border="1px" id="Term3" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                          <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                          </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk4">
                <!-- IV -->
            <h4>Học kỳ IV</h4>
                    <table border="1px" id="Term4" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk5">
                <!-- V -->
            <h4>Học kỳ V</h4>
                    <table border="1px" id="Term5" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk6">
                <!-- VI -->
            <h4>Học kỳ VI</h4>
                    <table border="1px" id="Term6" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                           <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                           </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk7">
                <!-- VII -->
            <h4>Học kỳ VII</h4>
                    <table border="1px" id="Term7" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                           <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk8">
                <!-- VIII -->
            <h4>Học kỳ VIII</h4>
                    <table border="1px" id="Term8" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th width="75%">Tên Môn học</th>
                                    <th width="5%">STC</th>
                                    <th width="5%">LT</th>
                                    <th width="5%">TH</th>
                                    <th width="5%">Bắt buộc</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot align="right">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                    </table>
            </div>
        </div>
    </div>


</body>
<div class="footer"> <a class="btn_top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>

<script>      
 var tbl1TongTCLT, tbl1TongTCTH, tbl2TongTCLT, tbl2TongTCTH, tbl3TongTCLT, tbl3TongTCTH, tbl4TongTCLT, tbl4TongTCTH, tbl5TongTCLT, tbl5TongTCTH, tbl6TongTCLT, tbl6TongTCTH, tbl7TongTCLT, tbl7TongTCTH, tbl8TongTCLT, tbl8TongTCTH, tongTCCTDT=0; 
// Cac gia tri de get gia tri đưa vào form tạm
    
$(document).ready(function() {
    var maCT=$("#maCT").val(), maMH, Hocki, Batbuoc, ghiChu;

    
    //Mảng lưu môn học bên các Học kì
    var DataTbl = new Array();
    var count =0;

    var events = $('#events');
    var table = $("#subject").DataTable({
           ajax:({
                  method: "POST",
                  url: "dataSJ.php",
                  data: { 
                        
                        "maCT" : maCT,
                        
                  },
             }),
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "pageLength": "50",
            select: true,
            
            columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" }
          ],
        }) ;
    //Reloadf du lieu
    // setInterval( function () {
    // table.ajax.reload( ); // user paging is not reset on reload
    // }, 10000 );
    var table2 = $('#Term1').DataTable({
        dom: 'Bfrtip',
        ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 1,
                        "maCT" : maCT,
                        
                  },
             }),

        select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl1TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl1TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
             // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl1TongTCTH+tbl1TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl1TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl1TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }

    });       

    var tblhki2 = $('#Term2').DataTable({
        dom: 'Bfrtip',  
        ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 2,
                        "maCT" : maCT,
                        
                  },
             }),
        select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl2TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl2TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl2TongTCTH+tbl2TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl2TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl2TongTCTH);
        },
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
        
    });
    var tblhki3 = $('#Term3').DataTable({
        dom: 'Bfrtip',
        ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 3,
                        "maCT" : maCT,
                        
                  },
             }),
        select: true,
        columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],

        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl3TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl3TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl3TongTCTH+tbl3TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl3TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl3TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
    });

    var tblhki4 = $('#Term4').DataTable({
            dom: 'Bfrtip',
            ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 4,
                        "maCT" : maCT,
                        
                  },
             }),
            select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl4TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl4TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl4TongTCTH+tbl4TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl4TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl4TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
        });

    var tblhki5 = $('#Term5').DataTable({
            dom: 'Bfrtip',
            ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 5,
                        "maCT" : maCT,
                        
                  },
             }),
            select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl5TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl5TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl5TongTCTH+tbl5TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl5TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl5TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
        });

    var tblhki6 = $('#Term6').DataTable({
            dom: 'Bfrtip',
            ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 6,
                        "maCT" : maCT,
                        
                  },
             }),
            select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl6TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl6TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl6TongTCTH+tbl6TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl6TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl6TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
        });
    var tblhki7 = $('#Term7').DataTable({
            dom: 'Bfrtip',
            ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 7,
                        "maCT" : maCT,
                        
                  },
             }),
            select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl7TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl7TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl7TongTCTH+tbl7TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl7TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl7TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
        });

    var tblhki8 = $('#Term8').DataTable({
            dom: 'Bfrtip',
            ajax:({
                  method: "POST",
                  url: "DataTerms.php",
                  data: { 
                        
                        "Hocki": 8,
                        "maCT" : maCT,
                        
                  },
             }),
            select: true,
          columns: [
            { data: "id" },
            { data: "tenMon" },
            { data: "tongSoTC" },
            { data: "soTCLyThuyet" },
            { data: "soTCThuchanh" },
            {
                data: "active", // cot Active chua CHECKBOX
                render: function (data, type, row) {
                    if (type === 'display') {
                        return '<input type="checkbox" class="editor-active">';
                    }
                    return data;
                },
                className: "dt-body-center"
            }
        ],
        select: {
            style: 'os',
            selector: 'td:not(:last-child)' // no row selection on last column
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total the complete result 
            
                
             tbl8TongTCLT = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
             tbl8TongTCTH = api
                .column( 4)
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Tổng:');
            $( api.column( 2 ).footer() ).html(tbl8TongTCTH+tbl8TongTCLT);
            $( api.column( 3 ).footer() ).html(tbl8TongTCLT);
            $( api.column( 4 ).footer() ).html(tbl8TongTCTH);
        },
        rowCallback: function (row, data) {
            // Set the checked state of the checkbox in the table
            $('input.editor-active', row).prop('checked', data.active == 1);
        }
        });
    $('#save').click(function(){
    //    $.confirm({
    //     title: 'Lưu chương trình',
    //     buttons: {
    //         OK: function () {
    //            //var checkedBatbuoc = $('[name="chkHki1"]:checkbox').val();
    //      //Check Bat buoc hki1
    //             $.alert("Succsess");
         
    //         },
    //         cancel: function () {
    //             $.alert('Canceled!');
    //         },
    //         somethingElse: {
    //             text: 'Something else',
    //             btnClass: 'btn-blue',
    //             keys: ['enter', 'shift'],
    //             action: function(){
    //                 $.alert('Something else?');
    //             }
    //     }
    // }
    // });
       table2.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                table2.rows().invalidate().draw();
             }
          });
         //Check Bat buoc hki2
          tblhki2.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki2.rows().invalidate().draw();
             }
          });
           //Check Bat buoc hki3
          tblhki3.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki3.rows().invalidate().draw();
             }
          });
           //Check Bat buoc hki4
          tblhki4.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki4.rows().invalidate().draw();
             }
          });
           //Check Bat buoc hki5
          tblhki5.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki5.rows().invalidate().draw();
             }
          });
           //Check Bat buoc hki6
          tblhki6.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki6.rows().invalidate().draw();
             }
          });
           //Check Bat buoc hki7
          tblhki7.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki7.rows().invalidate().draw();
             }
          });
           //Check Bat buoc hki8
          tblhki8.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.node();
            if ($(data).find('input').prop('checked') == 1)   // Lay dong duoc check
             {
                this.data()["active"]=1;
                tblhki8.rows().invalidate().draw();
             }
          });
       
        //Duyệt tất cả các bảng và lưu vào CSDL;
        //Duyệt bảng 1
        for(var i = 0; i< table2.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 1, table2.data()[i]['id'], table2.data()[i]['active']);
        }
        //Duyệt bảng 2
        for(var i = 0; i< tblhki2.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 2, tblhki2.data()[i]['id'], tblhki2.data()[i]['active']);
        }
        //Duyệt bảng 3
        for(var i = 0; i< tblhki3.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 3, tblhki3.data()[i]['id'], tblhki3.data()[i]['active']);
        }
        //Duyệt bảng 4
        for(var i = 0; i< tblhki4.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 4, tblhki4.data()[i]['id'], tblhki4.data()[i]['active']);
        }
        //Duyệt bảng 5
        for(var i = 0; i< tblhki5.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 5, tblhki5.data()[i]['id'], tblhki5.data()[i]['active']);
        }
        //Duyệt bảng 6
        for(var i = 0; i< tblhki6.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 6, tblhki6.data()[i]['id'], tblhki6.data()[i]['active']);
        }
        //Duyệt bảng 7
        for(var i = 0; i< tblhki7.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 7, tblhki7.data()[i]['id'], tblhki7.data()[i]['active']);
        }
        //Duyệt bảng 8
        for(var i = 0; i< tblhki8.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 8, tblhki8.data()[i]['id'], tblhki8.data()[i]['active']);
        }
        for(var soMON =0; soMON<count; soMON++)
        {
            // alert(DataTbl[soMON][0] + DataTbl[soMON][1] +DataTbl[soMON][2]+DataTbl[soMON][3]);
            $.ajax({
                  method: "POST",
                  url: "insertChitietCTDT.php",
                  data: { 
                        "maCT": DataTbl[soMON][0], 
                        "Hocki": DataTbl[soMON][1], 
                        "maMH": DataTbl[soMON][2],
                        "batbuoc": DataTbl[soMON][3],
                  },
             }).done(function( data ) {
                var result = $.parseJSON(data);
                if(result == 1) {
                  alert('User record saved successfully.');
                }
                else
                    alert('User not insert.');

            });
            
        }   
        
    });
    $('#getCT').click(function(){
        $("#txtTongTCLT").val( table2.column( 3 ).data().sum()+tblhki2.column( 3 ).data().sum()+tblhki3.column( 3 ).data().sum()+ tblhki4.column( 3 ).data().sum()+ tblhki5.column( 3 ).data().sum() +tblhki6.column( 3 ).data().sum() +tblhki7.column( 3 ).data().sum()+tblhki8.column( 3 ).data().sum());
         $("#txtTongTCTH").val( table2.column( 4 ).data().sum()+tblhki2.column( 4 ).data().sum()+tblhki3.column( 4 ).data().sum()+ tblhki4.column( 4 ).data().sum()+ tblhki5.column( 4 ).data().sum() +tblhki6.column( 4 ).data().sum() +tblhki7.column( 4 ).data().sum()+tblhki8.column( 4 ).data().sum());
         $("#txtTongTC").val(parseFloat($("#txtTongTCLT").val())+parseFloat($("#txtTongTCTH").val()));
    });
    // HKi1
    $('#btn_Them').click(function (e) {

        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        table2.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalth1= totalth1 + parseFloat(selectedRows.data()[0][4]),
                // totallt1 = totallt1 + parseFloat(selectedRows.data()[0][3]),
                // maMH =selectedRows.data()[0][0],
                // Hocki ='1',
            }
       ).draw( false ); 
        
        // $("#maMH").val(maMH);
        // $("#Hocki").val(Hocki);
        // $('#resultth1').val(totalth1);
        // $('#resultlt1').val(totallt1);
        // $('#result1').val(totallt1+totalth1);

        table.rows('.selected').remove().draw(false);
        // DataTbl[count++] = new Array(maCT, Hocki, maMH);
        
    });

    $('#btn_Trave').click(function () {
        var selectedRows = table2.rows('.selected');
       
        //them don da chon vao table
        for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                {
                     "id": selectedRows.data()[i]["id"],
                    "tenMon": selectedRows.data()[i]["tenMon"],
                    "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                    "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                    "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                    // totalth1= totalth1 - parseFloat(selectedRows.data()[i][4]),
                    // totallt1 = totallt1 - parseFloat(selectedRows.data()[i][3]),
                    // maMH =selectedRows.data()[i][0],
                    
                }
            ).draw(false);
        }
        // $('#resultth1').val(totalth1);
        // $('#resultlt1').val(totallt1);
        // $('#result1').val(totallt1+totalth1);
        //Xoa dong da chon
        table2.rows('.selected').remove().draw(false);
       
    });


    // HKI 2
    $('#btn_Them2').click(function () {

        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki2.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalth2= totalth2 + parseFloat(selectedRows.data()[0][4]),
                // totallt2 = totallt2 + parseFloat(selectedRows.data()[0][3]),
                // maMH =selectedRows.data()[0][0],
                // Hocki ='2'

            }
        ).draw( false ); 

        // $("#maMH").val(maMH);
        // $("#Hocki").val(Hocki);
        // //Xoa dong da chon
        // $('#resultth2').val(totalth2);
        // $('#resultlt2').val(totallt2);
        // $('#result2').val(totallt2+totalth2);
        table.rows('.selected').remove().draw(false);

    });

    $('#btn_Trave2').click(function () {
        var selectedRows = tblhki2.rows('.selected');
       
        //them don da chon vao table
        for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                {
                     "id": selectedRows.data()[i]["id"],
                    "tenMon": selectedRows.data()[i]["tenMon"],
                    "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                    "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                    "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                    // totalth2= totalth2 - parseFloat(selectedRows.data()[i][4]),
                    // totallt2 = totallt2 - parseFloat(selectedRows.data()[i][3])

                }
            ).draw(false);
        }
        // $('#resultth2').val(totalth2);
        // $('#resultlt2').val(totallt2);
        // $('#result2').val(totallt2+totalth2);
        //Xoa dong da chon
        tblhki2.rows('.selected').remove().draw(false);
        
    });


    $('#subject, #Term1 tbody').on('click', 'tr', function () {

        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
         
            $(this).addClass('selected');

        }
    });
    $('#Term2 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });
    // HKI 3
     
    $('#btn_Them3').click(function () {

        var selectedRows = table.rows('.selected');
       
        //them don da chon vao table2
        tblhki3.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalhki3=totalhki3+parseFloat(selectedRows.data()[0][2]),
                // maMH =selectedRows.data()[0][0],
                // Hocki ='3'
            }
        ).draw( false ); 
       
        // $("#maMH").val(maMH);
        // $("#Hocki").val(Hocki);
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);

         $('#result').val(totalhki3);
         


    });

    $('#btn_Trave3').click(function () {
        var selectedRows = tblhki3.rows('.selected');
       
        //them don da chon vao table
        for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                {
                    "id": selectedRows.data()[i]["id"],
                    "tenMon": selectedRows.data()[i]["tenMon"],
                    "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                    "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                    "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                    // totalhki3=totalhki3-parseFloat(selectedRows.data()[i][2])
                }
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki3.rows('.selected').remove().draw(false);
        // $('#result').val(totalhki3);
    });
    $('#Term3 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });
    // HKI 4
    $('#btn_Them4').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki4.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result4').val(totalhki4);
    });

    $('#btn_Trave4').click(function () {
        var selectedRows = tblhki4.rows('.selected');
        //them don da chon vao table
       for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                {
                    "id": selectedRows.data()[i]["id"],
                    "tenMon": selectedRows.data()[i]["tenMon"],
                    "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                    "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                    "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                    // totalhki4=totalhki4-parseFloat(selectedRows.data()[i][2])
                   
                }
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki4.rows('.selected').remove().draw(false);
        $('#result4').val(totalhki4);
    });
    $('#Term4 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });

    // HKI 5
    $('#btn_Them5').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki5.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result5').val(totalhki5);
    });

    $('#btn_Trave5').click(function () {
        var selectedRows = tblhki5.rows('.selected');
       alert(selectedRows.count());
        //them don da chon vao table
       for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
            {
                "id": selectedRows.data()[i]["id"],
                "tenMon": selectedRows.data()[i]["tenMon"],
                "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki5.rows('.selected').remove().draw(false);
        // $('#result5').val(totalhki5);
    });
    $('#Term5 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });

    // HKI 6
    $('#btn_Them6').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki6.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result6').val(totalhki6);
    });

    $('#btn_Trave6').click(function () {
        var selectedRows = tblhki6.rows('.selected');
       alert(selectedRows.count());
        //them don da chon vao table
       for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
            {
                "id": selectedRows.data()[i]["id"],
                "tenMon": selectedRows.data()[i]["tenMon"],
                "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki6.rows('.selected').remove().draw(false);
        // $('#result6').val(totalhki6);
    });
    $('#Term6 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });

    // HKI 7
    $('#btn_Them7').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki7.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result7').val(totalhki7);
    });

    $('#btn_Trave7').click(function () {
        var selectedRows = tblhki7.rows('.selected');
       alert(selectedRows.count());
        //them don da chon vao table
       for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
            {
                "id": selectedRows.data()[i]["id"],
                "tenMon": selectedRows.data()[i]["tenMon"],
                "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki7.rows('.selected').remove().draw(false);
        $('#result7').val(totalhki7);
    });
    $('#Term7 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });

    // HKI 8
    $('#btn_Them8').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki8.row.add(
            {
                "id": selectedRows.data()[0]["id"],
                "tenMon": selectedRows.data()[0]["tenMon"],
                "tongSoTC": selectedRows.data()[0]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[0]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[0]["soTCThuchanh"],
                "active": 0
                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result8').val(totalhki8);
    });

    $('#btn_Trave8').click(function () {
        var selectedRows = tblhki8.rows('.selected');
       alert(selectedRows.count());
        //them don da chon vao table
       for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
            {
                "id": selectedRows.data()[i]["id"],
                "tenMon": selectedRows.data()[i]["tenMon"],
                "tongSoTC": selectedRows.data()[i]["tongSoTC"],
                "soTCLyThuyet": selectedRows.data()[i]["soTCLyThuyet"],
                "soTCThuchanh": selectedRows.data()[i]["soTCThuchanh"],

                // totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            }
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki8.rows('.selected').remove().draw(false);
        // $('#result8').val(totalhki8);
    });
    $('#Term8 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected');

        }
    });

    $('#Term1').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
    $('#Term2').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
   //  $('#add').click(function(){
   //     var html = '<tr>';
   //     html += '<td contenteditable id="data1"></td>';
   //     html += '<td contenteditable id="data2"></td>';
   //     html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   //     html += '</tr>';
   //     $('#subject tbody').prepend(html);
   // });
  $('#Term3').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
    $('#Term4').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
      $('#Term5').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
    $('#Term6').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
      $('#Term7').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
    $('#Term8').on('change', 'input.editor-active', function () {
        $(this).prop('checked') ? 1 : 0;
                
    }); 
    $('#buttons').on('click', function(){
         
         $("#txtTongTCLT").val( table2.column( 3 ).data().sum()+tblhki2.column( 3 ).data().sum()+tblhki3.column( 3 ).data().sum()+ tblhki4.column( 3 ).data().sum()+ tblhki5.column( 3 ).data().sum() +tblhki6.column( 3 ).data().sum() +tblhki7.column( 3 ).data().sum()+tblhki8.column( 3 ).data().sum());
         $("#txtTongTCTH").val( table2.column( 4 ).data().sum()+tblhki2.column( 4 ).data().sum()+tblhki3.column( 4 ).data().sum()+ tblhki4.column( 4 ).data().sum()+ tblhki5.column( 4 ).data().sum() +tblhki6.column( 4 ).data().sum() +tblhki7.column( 4 ).data().sum()+tblhki8.column( 4 ).data().sum());
         $("#txtTongTC").val(parseFloat($("#txtTongTCLT").val())+parseFloat($("#txtTongTCTH").val()));
    });
    $('#ShowTC').on('click', function(){
         
         $("#txtTongTCLT").val( table2.column( 3 ).data().sum()+tblhki2.column( 3 ).data().sum()+tblhki3.column( 3 ).data().sum()+ tblhki4.column( 3 ).data().sum()+ tblhki5.column( 3 ).data().sum() +tblhki6.column( 3 ).data().sum() +tblhki7.column( 3 ).data().sum()+tblhki8.column( 3 ).data().sum());
         $("#txtTongTCTH").val( table2.column( 4 ).data().sum()+tblhki2.column( 4 ).data().sum()+tblhki3.column( 4 ).data().sum()+ tblhki4.column( 4 ).data().sum()+ tblhki5.column( 4 ).data().sum() +tblhki6.column( 4 ).data().sum() +tblhki7.column( 4 ).data().sum()+tblhki8.column( 4 ).data().sum());
         $("#txtTongTC").val(parseFloat($("#txtTongTCLT").val())+parseFloat($("#txtTongTCTH").val()));
    });

    $.fn.dataTable.ext.errMode = 'none';
    $('#Term1 #Term2 #Term3 #Term4 #Term5 #Term6 #Term7 #Term8').on('error.dt', function(e, settings, techNote, message) {
     console.log( 'An error occurred: ', message); 
    });

} );
</script>
<script>
    
    function myFunction() {
        var x = document.getElementById('ClassTC');
            if (x.style.visibility === 'hidden') {
                x.style.visibility = 'visible';
            } else {
                x.style.visibility = 'hidden';
            }
        }
    </script>
</div>
</html>