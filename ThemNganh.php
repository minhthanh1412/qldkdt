<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Them Nganh</title>
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
     <a href="ThemCTDT.php"><img src="images/return.png"  style="width: 3%; margin-left: 0px"  data-toggel="tooltip" title="Quay về trang Thêm Chương trình Đào tạo"/></a>
	<center>
    <h2>Thêm Ngành Đào tạo</h2>
	<div style="width: 50%;">
		<table id="Nganh" class="display" style="width:100%">
	            <thead>
	                <tr>
	                    <th>Mã Ngành</th>
	                    <th>Tên Ngành</th>
                      <th width="5%"><button type="button" name="add" id="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
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
    var table = $("#Nganh").DataTable({
            ajax: 'LoadNganh.php',
            select: true,
            columns: [
                { data: "maNganh" },
                { data: "tenNganh" },
            ],
        });
      $('#add').click(function(){
	       var html = '<tr>';
	       html += '<td></td>';
	       html += '<td contenteditable id="data2"></td>';
	       html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>'
	       ;
	       html += '</tr>';
	       $('#Nganh tbody').prepend(html);
   	   });
       $(document).on('click', '#insert', function(){
         var tenNganh = $('#data2').text();
         if(tenNganh != '')
         {
          $.ajax({
           url:"AjaxAddNganh.php",
           method:"POST",
           data:{tenNganh: tenNganh},
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

