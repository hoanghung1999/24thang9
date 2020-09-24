<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="fuctionforQL.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center " style='margin-top:8%'>MENU</h2>
  <?php
  echo '<p style="margin:10px auto;width:50%;">chủ tài khoản :<i style="color:red">' .($_SESSION['name']).'</i></p>';
  ?>
  <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;' onclick="window.open('inforsv.php', '_self')">Xem thông tin Sinh Viên</button>
  <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;' onclick="window.open('inforuser.php', '_self')">Xem thông tin người dùng</button>

  <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;'>Giao Bài Tập</button>
  <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;'  onclick="window.open('updateprofile.php', '_self')">Sửa thông tin cá nhân</button> 
  <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;' onclick="window.open('login.php', '_self')">Thoát</button>
  
</div>

</body>
</html>