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
       <title>Quản lí thông tin</title>
       <style>
             div.thongtin
              {
                     width:70%;
                     margin:100px auto;
              }
              .row
              {
                     margin:50px 0;
              }
              img
              {
                margin:0 190px;
                width:100%;
              }
              
       </style>
</head>
<body>



<?php

                  include '../connect.php';
                  $query = mysqli_query($conn,"SELECT * FROM thongtin");
                  $result = $query -> fetch_assoc();
                  $ten = $result['ten'];
                  $email = $result['mail'];
                  $sdt = $result['sdt'];
                  $hv = $result['hocvan'];
                  $avatar = $result['avatar'];
                  $dc = $result['diachi'];
             
                 


?>
 <div class="row">
    <div class="col-md-3">
     <img src=<?php echo  "../assets/img/".$avatar;?> alt='' class="img-thumbnail">
     
            </div>
             <div class="col-md-2">
               
            </div>
             <div class="col-md-7">
              <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload" value="">
    <input type="submit" name="up" value="Thay đổi ảnh" class="btn btn-info">
</form>
                   <?php
                  
if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Chưa chọn ảnh!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'upload/' . $_FILES['fileUpload']['name']);
 
    $filename =  $_FILES['fileUpload']['name'];
   if( mysqli_query($conn,"UPDATE thongtin SET avatar = '$filename'") == TRUE)
   {
     
       header('Location: http://localhost:81/mycv/admin/thongtin.php');
   }
    }
  }         
                   
                   ?>
            </div>
            </div>
            
        
            
       <div class="thongtin">
       <form method="post" action="">
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tên</label>
      <input type="text" class="form-control" value="<?php echo $ten;?>" required name = "ten">
    </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control"value="<?php echo $email;?>"required name = "email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Địa chỉ</label>
    <input type="text" class="form-control" id="inputAddress"value="<?php echo $dc;?>"required name = "dc">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Số điện thoại</label>
      <input type="text" class="form-control" id="inputCity" value="<?php echo $sdt;?>"required name = "sdt">
    </div>
    <div class="form-group col-md-6">
      <label for="inputHV">Học vấn</label>
      <input type="text" class="form-control" id="inputHV"value="<?php echo $hv;?>"required name = "hv">
    </div>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
<?php
 if(isset( $_POST['ten']))
 {
                  $ten1 = $_POST['ten'];
                  $email1 =  $_POST['email'];
                  $sdt1 =  $_POST['sdt'];
                  $hv1 =  $_POST['hv'];            
                  $dc1 =  $_POST['dc'];
             
 if( mysqli_query($conn,"UPDATE thongtin SET ten = '$ten1',sdt = '$sdt1',mail = '$email1',hocvan   = '$hv1',diachi = '$dc1'") == TRUE)
 {
   echo '<div class="alert alert-success" role="alert">
  Lưu thành công
</div>';
 }
}


?>
       </div>
</body>
</html>