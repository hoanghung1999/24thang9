<?php
require_once('dbhelp.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Student Management</title>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
        <h2 class="text-center">Thông Tin Người Dùng Hệ Thống </h2>
        <div class="row">
          <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <table class="table table-bordered text-center">
			<thead>
				<tr>
					<th>STT</th>
					<th>Họ & tên</th>
					<th>Chức vụ</th>
					<th width="60px"></th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql = 'select * from sinhvien';

				$studentList = executeResult($sql);

				$index = 1;
				foreach ($studentList as $std) {
					echo '<tr>
			<td>' . ($index++) . '</td>
            <td>' . $std['name'] . '</td>
			<td>' . $std['chucvu'] . '</td>
            
			<td><button class="btn btn-warning" onclick=\'window.open("imfordetail.php?id=' . $std['id'] . '","_self")\'>chi tiết</button></td>
		</tr>';
				}
				?>
			</tbody>
		</table>		
        </div>
        <div class="col-sm-2"></div>  
        </div>

        
		
	</div>
</body>

</html>