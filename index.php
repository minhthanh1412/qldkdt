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
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow86.js"></script>
    <noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

    <!-- function insert chitietdaotao -->
        
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
            margin-top: 100px;
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
            <a href="#" data-toggel="tooltip" title="Thêm Chương trình Đào tạo!">...</a>
            <select name="CTDT" data-toggel="tooltip" title="Danh sách các Chương trình Đào tạo">
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
            <button type="submit" name = "getusers" class="btn btn-primary" data-toggel="tooltip" title="Chọn Chương trình Đào tạo!">Chọn</button>       
            </div> 
            </form>
            <?
            if(isset($_POST["getusers"]))
            {
                $a= $_POST["CTDT"];
                echo $a;
            }
        ?>
    </div>
    <div class="container-fluid">
        <!-- Bang tam chua du lieu insert chi tiet -->
        <form name='form_getDL'>
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
                <table id="subject" class="display" style="width:100%; height: 500px;">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Tên Môn học</th>
                                <th>Số Tín chỉ</th>
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
            <div class="col-md-2 text-center">
                    <!-- Button  -->
                  <div class="buttons">
                    <button class="btn btn-success" id="btn_Them"> I--> </button>
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
            <!-- Bang cac Hki -->
            <form  name="ghiChu_batbuoc" method="POST">
                <div class="form-group">
                    <div class="col-md-3" align="right">
                         <input readonly="" name ="save" id ="save" class="btn btn-primary" data-toggel="tooltip" title="Lưu Chương trình Đào tạo!" value="Lưu Chương trình"></input> 
                    </div>
                   <!--  <div class="col-md-1">
                        <label data-toggel="tooltip" title="Môn học bắt buộc hay tự chọn">Bắt buộc: </label>
                        <input type="checkbox" class="get_value">
                    </div> -->
                </div>
            </form>
            <div class="col-md-5">
                <!-- I -->
            <div class ="tblmargin" id="hk1">
                <h4>Học kỳ I</h4>
                        <table border="1px" id="Term1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Tên Môn học</th>
                                        <th>Số Tín chỉ</th>
                                        <th>LT</th>
                                        <th>TH</th>
                                     
                                    </tr>
                                </thead>
                              <tbody>
                              </tbody>
                              <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result1"></output></th>
                                  <th><output id="resultlt1"></output></th>
                                  <th><output id="resultth1"></output></th>
                              </tfoot>
                        </table>
            </div>
            <div class ="tblmargin" id="hk2" style="">
                <!-- II -->
            <h4>Học kỳ II</h4>
                    <table border="1px" id="Term2" class="display" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result2"></output></th>
                                  <th><output id="resultlt2"></output></th>
                                  <th><output id="resultth2"></output></th>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk3" style="">
                <!-- III -->
            <h4>Học kỳ III</h4>
                    <table border="1px" id="Term3" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                    <th></th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                          <tfoot>
                              <th></th>
                              <th style="text-align: right;">Tổng TC: </th>
                              <th><output id="result"></output></th>
                          </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk4">
                <!-- IV -->
            <h4>Học kỳ IV</h4>
                    <table border="1px" id="Term4" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result4"></output></th>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk5">
                <!-- V -->
            <h4>Học kỳ V</h4>
                    <table border="1px" id="Term5" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result5"></output></th>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk6">
                <!-- VI -->
            <h4>Học kỳ VI</h4>
                    <table border="1px" id="Term6" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result6"></output></th>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk7">
                <!-- VII -->
            <h4>Học kỳ VII</h4>
                    <table border="1px" id="Term7" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result7"></output></th>
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk8">
                <!-- VIII -->
            <h4>Học kỳ VIII</h4>
                    <table border="1px" id="Term8" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên Môn học</th>
                                    <th>Số Tín chỉ</th>
                                    <th>LT</th>
                                    <th>TH</th>
                                </tr>
                            </thead>
                          <tbody>
                                
                          </tbody>
                            <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result8"></output></th>
                            </tfoot>
                    </table>
            </div>
        </div>
    </div>


</body>
<div class="footer"> <a class="btn_top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
var totalhki1=0, totalhki2=0, totalhki3=0, totalhki4=0, totalhki5=0, totalhki6=0, totalhki7=0, totalhki8=0;
var totallt1=0, totallt2=0, totallt3=0, totallt4=0, totallt5=0, totallt6=0, totallt7=0, totallt8=0;
var totalth1=0, totalth2=0, totalth3=0, totalth4=0, totalth5=0, totalth6=0, totalth7=0, totalth8=0;         
// Cac gia tri de get gia tri đưa vào form tạm

    
$(document).ready(function() {
    var maCT=$("#maCT").val(), maMH, Hocki, Batbuoc, ghiChu;

    //Mảng lưu môn học bên các Học kì
    var DataTbl = new Array();
    var count =0;

    var events = $('#events');
    var table = $("#subject").DataTable({
            ajax: 'dataSJ.php',
            dom: 'Bfrtip',
            select: true,
        }) 
    //Reloadf du lieu
    // setInterval( function () {
    // table.ajax.reload( ); // user paging is not reset on reload
    // }, 10000 );
    var table2 = $('#Term1').DataTable({
        dom: 'Bfrtip',
        select: true,
    });       
    var tblhki2 = $('#Term2').DataTable({
        dom: 'Bfrtip',  
        select: true,
    });
    var tblhki3 = $('#Term3').DataTable({
        dom: 'Bfrtip',
        select: true,
        buttons: [
            {
                text: 'Get selected data',
                action: function () {
                    var count = tblhki3.rows({ selected: true }).count();

                    events.prepend('<div>' + count + ' row(s) selected</div>');
                }
            }
        ]
    });

    var tblhki4 = $('#Term4').DataTable({
            dom: 'Bfrtip',
            select: true,
            buttons: [
                {
                    text: 'Get selected data',
                    action: function () {
                        var count = tblhki4.rows({ selected: true }).count();

                        events.prepend('<div>' + count + ' row(s) selected</div>');
                    }
                }
            ]
        });

    var tblhki5 = $('#Term5').DataTable({
            dom: 'Bfrtip',
            select: true,
            buttons: [
                {
                    text: 'Get selected data',
                    action: function () {
                        var count = tblhki5.rows({ selected: true }).count();

                        events.prepend('<div>' + count + ' row(s) selected</div>');
                    }
                }
            ]
        });

    var tblhki6 = $('#Term6').DataTable({
            dom: 'Bfrtip',
            select: true,
            buttons: [
                {
                    text: 'Get selected data',
                    action: function () {
                        var count = tblhki6.rows({ selected: true }).count();

                        events.prepend('<div>' + count + ' row(s) selected</div>');
                    }
                }
            ]
        });
    var tblhki7 = $('#Term7').DataTable({
            dom: 'Bfrtip',
            select: true,
            buttons: [
                {
                    text: 'Get selected data',
                    action: function () {
                        var count = tblhki7.rows({ selected: true }).count();

                        events.prepend('<div>' + count + ' row(s) selected</div>');
                    }
                }
            ]
        });

    var tblhki8 = $('#Term8').DataTable({
            dom: 'Bfrtip',
            select: true,
            buttons: [
                {
                    text: 'Get selected data',
                    action: function () {
                        var count = tblhki8.rows({ selected: true }).count();

                        events.prepend('<div>' + count + ' row(s) selected</div>');
                    }
                }
            ]
        });

    $('#save').click(function(){
        //Duyệt tất cả các bảng và lưu vào CSDL
        //Duyệt bảng 1
        for(var i = 0; i< table2.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 1, table2.data()[i][0]);
        }
        //Duyệt bảng 2
        for(var i = 0; i< tblhki2.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 2, tblhki2.data()[i][0]);
        }
        //Duyệt bảng 3
        for(var i = 0; i< tblhki3.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 3, tblhki3.data()[i][0]);
        }
        //Duyệt bảng 4
        for(var i = 0; i< tblhki4.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 4, tblhki4.data()[i][0]);
        }
        //Duyệt bảng 5
        for(var i = 0; i< tblhki5.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 5, tblhki5.data()[i][0]);
        }
        //Duyệt bảng 6
        for(var i = 0; i< tblhki6.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 6, tblhki6.data()[i][0]);
        }
        //Duyệt bảng 7
        for(var i = 0; i< tblhki7.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 7, tblhki7.data()[i][0]);
        }
        //Duyệt bảng 8
        for(var i = 0; i< tblhki8.data().length; i++)
        {
             DataTbl[count++] = new Array(maCT, 8, tblhki8.data()[i][0]);
        }
        for(var soMON =0; soMON<count; soMON++)
        {
           
                 $.ajax({
              method: "POST",
              url:    "insertChitietDT.php",
              data: { "maCT": DataTbl[soMON][0] , "maMH": DataTbl[soMON][1], "Hocki": DataTbl[soMON][2]},
             }).done(function( data ) {
                var result = $.parseJSON(data);
                if(result == 1) {
                  alert('User record saved successfully.');
                }
                else
                    alert('User not insert.');

            });
            
        }
    })

    // HKi1
    $('#btn_Them').click(function (e) {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        table2.row.add(
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                selectedRows.data()[0][5],
                totalth1= totalth1 + parseFloat(selectedRows.data()[0][4]),
                totallt1 = totallt1 + parseFloat(selectedRows.data()[0][3]),
                maMH =selectedRows.data()[0][0],
                Hocki ='1'

            ]
       ).draw( false ); 
        
        $("#maMH").val(maMH);
        $("#Hocki").val(Hocki);
        
            // $.ajax({
            //   method: "POST",
            //   url:    "insertChitietDT.php",
            //   data: { "maCT": maCT, "maMH": maMH, "Hocki": Hocki},
            //  }).done(function( data ) {
            //     var result = $.parseJSON(data);
            //     if(result == 1) {
            //       alert('User record saved successfully.');
            //     }
            //     else
            //         alert('User not insert.');

            // });
        $('#resultth1').val(totalth1);
        $('#resultlt1').val(totallt1);
        $('#result1').val(totallt1+totalth1);

        table.rows('.selected').remove().draw(false);
        // DataTbl[count++] = new Array(maCT, Hocki, maMH);
        alert('MaCT:' +DataTbl[count-1][0] + 'Hocki: ' +DataTbl[count-1][1] + 'maMH: '+ DataTbl[count-1][2]);
        // for(var soMON =0; soMON<count; soMON++)
        // {
           
        //          $.ajax({
        //       method: "POST",
        //       url:    "insertChitietDT.php",
        //       data: { "maCT": DataTbl[soMON][0] , "maMH": DataTbl[soMON][1], "Hocki": DataTbl[soMON][2]},
        //      }).done(function( data ) {
        //         var result = $.parseJSON(data);
        //         if(result == 1) {
        //           alert('User record saved successfully.');
        //         }
        //         else
        //             alert('User not insert.');

        //     });
            
        // }
        // as2D[0].push(Hocki,maMH);
        // for(var i=0; i<as2D[0].length; i++){
            
        // // alert(as2D[0][i])
        // };

        // // 


        
    });

    $('#btn_Trave').click(function () {
        var selectedRows = table2.rows('.selected');
       
        //them don da chon vao table
        for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalth1= totalth1 - parseFloat(selectedRows.data()[i][4]),
                    totallt1 = totallt1 - parseFloat(selectedRows.data()[i][3]),
                    maMH =selectedRows.data()[i][0],
                    
                ]
            ).draw(false);
        }
        $('#resultth1').val(totalth1);
        $('#resultlt1').val(totallt1);
        $('#result1').val(totallt1+totalth1);
        //Xoa dong da chon
        table2.rows('.selected').remove().draw(false);
       
    });

    // HKI 2
    $('#btn_Them2').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        tblhki2.row.add(
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalth2= totalth2 + parseFloat(selectedRows.data()[0][4]),
                totallt2 = totallt2 + parseFloat(selectedRows.data()[0][3]),
                maMH =selectedRows.data()[0][0],
                Hocki ='2'

            ]
        ).draw( false ); 

        $("#maMH").val(maMH);
        $("#Hocki").val(Hocki);
        //Xoa dong da chon
        $('#resultth2').val(totalth2);
        $('#resultlt2').val(totallt2);
        $('#result2').val(totallt2+totalth2);
        table.rows('.selected').remove().draw(false);

    });

    $('#btn_Trave2').click(function () {
        var selectedRows = tblhki2.rows('.selected');
       
        //them don da chon vao table
        for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalth2= totalth2 - parseFloat(selectedRows.data()[i][4]),
                    totallt2 = totallt2 - parseFloat(selectedRows.data()[i][3])

                ]
            ).draw(false);
        }
        $('#resultth2').val(totalth2);
        $('#resultlt2').val(totallt2);
        $('#result2').val(totallt2+totalth2);
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
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki3=totalhki3+parseFloat(selectedRows.data()[0][2]),
                maMH =selectedRows.data()[0][0],
                Hocki ='3'
            ]
        ).draw( false ); 
       
        $("#maMH").val(maMH);
        $("#Hocki").val(Hocki);
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);

         $('#result').val(totalhki3);
         $.ajax({
              method: "POST",
              url:    "insertChitietDT.php",
              data: { "maCT": maCT, "maMH": maMH, "Hocki": Hocki},
             }).done(function( data ) {
                var result = $.parseJSON(data);
                if(result == 1) {
                  alert('User record saved successfully.');
                }
                else
                    alert('User not insert.');

            });
       


    });

    $('#btn_Trave3').click(function () {
        var selectedRows = tblhki3.rows('.selected');
       
        //them don da chon vao table
        for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalhki3=totalhki3-parseFloat(selectedRows.data()[i][2])
                ]
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki3.rows('.selected').remove().draw(false);
        $('#result').val(totalhki3);
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
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki4=totalhki4+parseFloat(selectedRows.data()[0][2])
            ]
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result4').val(totalhki4);
    });

    $('#btn_Trave4').click(function () {
        var selectedRows = tblhki4.rows('.selected');
       alert(selectedRows.count());
        //them don da chon vao table
       for(var i=0 ; i<selectedRows.count(); i++){
           table.row.add(
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalhki4=totalhki4-parseFloat(selectedRows.data()[i][2])
                   
                ]
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
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki5=totalhki5+parseFloat(selectedRows.data()[0][2])
            ]
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
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalhki5=totalhki5-parseFloat(selectedRows.data()[i][2])
                ]
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki5.rows('.selected').remove().draw(false);
        $('#result5').val(totalhki5);
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
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki6=totalhki6+parseFloat(selectedRows.data()[0][2])
            ]
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
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalhki6=totalhki6-parseFloat(selectedRows.data()[i][2])
                ]
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki6.rows('.selected').remove().draw(false);
        $('#result6').val(totalhki6);
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
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki7=totalhki7+parseFloat(selectedRows.data()[0][2])
            ]
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
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalhki7=totalhki7-parseFloat(selectedRows.data()[i][2])
                ]
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
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki8=totalhki8+parseFloat(selectedRows.data()[0][2])
            ]
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
                [
                    selectedRows.data()[i][0],
                    selectedRows.data()[i][1],
                    selectedRows.data()[i][2],
                    selectedRows.data()[i][3],
                    selectedRows.data()[i][4],
                    totalhki8=totalhki8-parseFloat(selectedRows.data()[i][2])
                ]
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki8.rows('.selected').remove().draw(false);
        $('#result8').val(totalhki8);
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
    

} );
</script>
</div>
</html>