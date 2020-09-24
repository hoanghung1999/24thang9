<?php
require_once('dbhelp.php');
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
	<title>Thông tin chi tiết </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="addCss.css">
</head>


<body>

<?php
    echo 
	'<div class="card" style="width:45%;margin:0 auto;">
    <img class="" src="user.jfif" alt="Card image" style="width:46%">
    <div class="card-body">
      <h4 class="card-title">Họ và Tên: <i style="color:red">'.$s_name.'</i></h4>'.
      '<h5 class="card-text">Chức Vụ:  <i style="color:red">'.$s_chucvu.'</i></h5>'.
      '<h5 class="card-text">Email:&emsp;<i style="color:red">'.$s_email.'</i></h5>'.
	  '<h5 class="card-text">Sđt:&emsp;<i style="color:red">'.$s_sdt.'</i></h5>gửi tin nhắn :<input type="text" style="width:60%">
	  <i class="fa fa-paper-plane" aria-hidden="true" style="font-size:30px" onclick="alert("okk")"></i>'.
	  '</div></div>'
	   
  ?>
	
</body>
</html>