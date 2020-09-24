<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    <h2 class="text-center " style='margin-top:8%'>MENU</h2>
    <?php
    echo '<p style="margin:10px auto;width:50%;">chủ tài khoản :<i style="color:red">' .($_SESSION['name']).'</i></p>';
    ?>
    <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;' onclick="window.open('', '_self')">Xem Bài tập</button>
    <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;'  onclick="window.open('', '_self')">Xem tin nhắn</button>
    <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;'  onclick="window.open('updateprofile.php', '_self')">Sửa thông tin cá nhân</button> 
    <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;' onclick="window.open('inforuser.php', '_self')">Xem thông tin người dùng</button>
    <button type="button" class="btn btn-primary btn-block" style='width: 50%;margin: 15px auto;' onclick="window.open('deletesesstion.php', '_self')">Thoát</button>
    
  </div>
</body>
</html>
