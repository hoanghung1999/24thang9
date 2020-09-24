<?php
require_once('dbhelp.php');

$s_username = $s_password = $s_name = $s_email = $s_sdt = $s_chucvu = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['username'])) {
		$s_username = $_POST['username'];
	}

	if (isset($_POST['password'])) {
		$s_password = $_POST['password'];
	}

	if (isset($_POST['name'])) {
		$s_name = $_POST['name'];
	}
	if (isset($_POST['email'])) {
		$s_email = $_POST['email'];
	}

	if (isset($_POST['sdt'])) {
		$s_sdt = $_POST['sdt'];
	}
	if (isset($_POST['chucvu'])) {
		$s_chucvu = $_POST['chucvu'];
	}
	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}
	$s_username = str_replace('\'', '\\\'', $s_username);
	$s_password      = str_replace('\'', '\\\'', $s_password);
	$s_name  = str_replace('\'', '\\\'', $s_name);
	$s_email       = str_replace('\'', '\\\'', $s_email);
	$s_sdt       = str_replace('\'', '\\\'', $s_sdt);
	$s_chucvu       = str_replace('\'', '\\\'', $s_chucvu);
	if ($s_id != '') {
		//update
		$sql = "update sinhvien set username = '$s_username', password = '$s_password', name = '$s_name',
		email='$s_email' ,sdt='$s_sdt' ,chucvu='$s_chucvu' where id = " . $s_id;
	} else {
		//insert
		$sql = "insert into sinhvien(username,password,name,email,sdt,chucvu) value ('$s_username', 
		'$s_password', '$s_name','$s_email','$s_sdt','$s_chucvu')";
	}
	$ret = execute($sql);
	
	if($ret==0){
		echo "<script type='text/javascript'>alert('that bai');</script>";
	}
	else{
		header('location:CRUDsv.php');
	}
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from sinhvien where id = ' . $id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_username = $std['username'];
		$s_password      = $std['password'];
		$s_name = $std['name'];
		$s_email  = $std['email'];
		$s_sdt  = $std['sdt'];
		$s_chucvu  = $std['chucvu'];

	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="addCss.css">
</head>

<body>
	<div class="container">
		<div class="panel panel-primary dis__trungtam">
			<div class="panel-heading">
			<?php
			if($id==''){	
			echo '<h2 class="text-center">Add Student</h2>';}
			else{
				echo '<h2 class="text-center">Update Student</h2>';}
			
			?>
			</div>
			<div class="panel-body ">
				<form method="post">
					<div class="trungtam">
						<label>tên tài khoản:</label>
						<input type="number" name="id" value="<?= $id ?>" style="display: none;">
						<input required="true" type="text" class="" id="username" name="username" value="<?= $s_username ?>">
					</div>

					<div class="trungtam">
						<label>mật khẩu:</label>
						<input type="password" class="" id="password" name="password" value="<?= $s_password ?>">
					</div>

					<div class="trungtam">
						<label>họ tên:</label>
						<input type="text" class="" id="name" name="name" value="<?= $s_name ?>">
					</div>

					<div class="trungtam">
						<label>email:</label>
						<input type="text" class="" id="email" name="email" value="<?= $s_email ?>">
					</div>
					<div class="trungtam">
						<label>SDT:</label>
						<input type="number" class="" id="sdt" name="sdt" value="<?= $s_sdt ?>">
					</div>

					<div class="trungtam">
						<label>chức vụ:</label>
						<input type="text" class="" id="chucvu" name="chucvu" value="<?= $s_chucvu ?>">
						
					</div>

					<button class="btn btn-success">Save</button>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>