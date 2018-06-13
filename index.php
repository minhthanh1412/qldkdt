<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý chương trình Đào tạo!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="css/dataTables.checkboxes.css" rel="stylesheet"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/dataTables.checkboxes.min.js"></script>

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
       
    </style>

</head>
<body>
    <div class="header"><h1>QUẢN LÝ CHƯƠNG TRÌNH ĐÀO TẠO </h1></div>
    <?php
    require("connectDB.php");
    ?>
    <div class ="selCTDT" style="text-align: center;">
        <label>Chọn Chương trình Đào tạo: </label>
        <select name="CTDT" >
                    <?php
                        $sql = "select * from tblchuongtrinhdt";
                        $rs = $conn-> query($sql);
                        while ($row=$rs -> fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row["maCT"]; ?>"><?php echo $row["tenCT"]; ?></option>
                            <?php
                        }   
                    ?>

        </select>
        <a href="EditCTDT.php">...</a>
    </div>
    <div class="container-fluid">
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
            <!-- Bang cac Hki -->
            <div class="col-md-5">
                <!-- I -->
            <div class ="tblmargin" id="hk1">
                <h4>Học kỳ I</h4>
                        <table id="Term1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Tên Môn học</th>
                                        <th>Số Tín chỉ</th>
                                        <th>LT</th>
                                        <th>TH</th>
                                        <th>Bắt buộc</th>
                                    </tr>
                                </thead>
                              <tbody>
                              </tbody>
                              <tfoot>
                                  <th></th>
                                  <th style="text-align: right;">Tổng TC: </th>
                                  <th><output id="result1"></output></th>
                              </tfoot>
                        </table>
            </div>
            <div class ="tblmargin" id="hk2" style="">
                <!-- II -->
            <h4>Học kỳ II</h4>
                    <table id="Term2" class="display" style="width:100%;">
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
                            </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk3" style="">
                <!-- III -->
            <h4>Học kỳ III</h4>
                    <table id="Term3" class="display" style="width:100%">
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
                              <th><output id="result"></output></th>
                          </tfoot>
                    </table>
            </div>
            <div class ="tblmargin" id="hk4">
                <!-- IV -->
            <h4>Học kỳ IV</h4>
                    <table id="Term4" class="display" style="width:100%">
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
                    <table id="Term5" class="display" style="width:100%">
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
                    <table id="Term6" class="display" style="width:100%">
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
                    <table id="Term7" class="display" style="width:100%">
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
                    <table id="Term8" class="display" style="width:100%">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
var totalhki1=0, totalhki2=0, totalhki3=0, totalhki4=0, totalhki5=0, totalhki6=0, totalhki7=0, totalhki8=0;
$(document).ready(function() {

    var events = $('#events');
    var table = $("#subject").DataTable({
            ajax: 'dataSJ.php',
            dom: 'Bfrtip',
            select: true,
             buttons: [
            {
                text: 'Get selected data',
                action: function () {
                    var count = table2.rows({ selected: true }).count();
                    events.prepend('<div>' + count + ' row(s) selected</div>');
                }
            }
        ]
        }) 
    var table2 = $('#Term1').DataTable({
        dom: 'Bfrtip',
        select: true,
    });       
    var tblhki2 = $('#Term2').DataTable({
        dom: 'Bfrtip',
        select: true,
        buttons: [
            {
                text: 'Get selected data',
                action: function () {
                    var count = tblhki2.rows({ selected: true }).count();

                    events.prepend('<div>' + count + ' row(s) selected</div>');
                }
            }
        ]
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


    // HKi1
    $('#btn_Them').click(function () {
        var selectedRows = table.rows('.selected');
        //them don da chon vao table2
        table2.row.add(
            [
                selectedRows.data()[0][0],
                selectedRows.data()[0][1],
                selectedRows.data()[0][2],
                selectedRows.data()[0][3],
                selectedRows.data()[0][4],
                totalhki1=totalhki1+parseFloat(selectedRows.data()[0][2])
            ]
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result1').val(totalhki1);
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

                    totalhki1=totalhki1-parseFloat(selectedRows.data()[i][2])
                ]
            ).draw(false);
        }
        //Xoa dong da chon
        table2.rows('.selected').remove().draw(false);
        $('#result1').val(totalhki1);
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
                totalhki2=totalhki2+parseFloat(selectedRows.data()[0][2])
            ]
        ).draw( false ); 
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);
        $('#result2').val(totalhki2);

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
                    totalhki2=totalhki2-parseFloat(selectedRows.data()[i][2])
                ]
            ).draw(false);
        }
        //Xoa dong da chon
        tblhki2.rows('.selected').remove().draw(false);
        $('#result2').val(totalhki2);
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
                totalhki3=totalhki3+parseFloat(selectedRows.data()[0][2])
            ]
        ).draw( false ); 
       
        //Xoa dong da chon
        table.rows('.selected').remove().draw(false);

         $('#result').val(totalhki3);

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