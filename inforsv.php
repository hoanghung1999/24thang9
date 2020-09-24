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
		<h2 class="text-center">Quản lý thông tin sinh viên </h2>

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>user name</th>
					<th>password</th>
					<th>Họ & tên</th>
					<th>email</th>
					<th>SDT</th>
					<th>Chức vụ</th>
					<th width="60px"></th>
					<th width="60px"></th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql = 'select * from sinhvien where chucvu="SV"';

				$studentList = executeResult($sql);

				$index = 1;
				foreach ($studentList as $std) {
					echo '<tr>
			<td>' . ($index++) . '</td>
			<td>' . $std['username'] . '</td>
			<td>' . $std['password'] . '</td>
            <td>' . $std['name'] . '</td>
			<td>' . $std['email'] . '</td>
			<td>' . $std['sdt'] . '</td>
			<td>' . $std['chucvu'] . '</td>
            
			<td><button class="btn btn-warning" onclick=\'window.open("add_sv.php?id=' . $std['id'] . '","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteStudent(' . $std['id'] . ')">Delete</button></td>
		</tr>';
				}
				?>
			</tbody>
		</table>
		<div class="">
			<!-- <button class="btn btn-success des__btn element_center" onclick="window.open('add_sv.php', '_self')">Add Student</button> -->
			<button type="button" class="btn btn-primary" onclick="window.open('add_sv.php', '_self')">Thêm Người dùng</button>
			<button type="button" class="btn btn-primary" onclick="window.open('fuctionforql.php', '_self')">Quay Lại </button>
		</div>
	</div>

	<script type="text/javascript">
		function deleteStudent(id) {
			console.log(1)
			// document.write(id + name)
			option = confirm('Bạn có muốn xoá sinh viên này không ?')

			if (!option) {
				return;
			}

			console.log(id);
			$.post('delete_sv.php', {
				'id': id,
			}, function(data) {
				alert(data);
				location.reload();
			});
		}
	</script>
</body>

</html>