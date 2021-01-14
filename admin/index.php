<?php
 session_start();
 if(!isset( $_SESSION['admin']))
 {
        header('Location: http://localhost:81/mycv');
        exit;
 }
    require 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well come</h4>
  <p>Chào mạnh</p>
  <hr>
  <p class="mb-0">Chào mừng bạn đến trang admin</p>
</div>
</body>
</html>