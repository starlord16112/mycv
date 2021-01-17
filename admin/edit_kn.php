<?php
session_start();
include '../connect.php';
 if(!isset( $_SESSION['admin']) or !isset($_GET['edit']))
 {
        header('Location: http://localhost:81/mycv');
        exit;
 }
if(isset($_POST['submit1']))
{
    $id1=$_POST['id'];
    $time1=$_POST['time1'];
    $congviec1=$_POST['congviec1'];
    $congty1=$_POST['congty1'];
    $filename =  $_FILES['file']['name'];
   if(mysqli_query($conn,"UPDATE kinhnghiem SET thoigian = '$time1', congviec='$congviec1',congty='$congty1',img='$filename' WHERE id='$id1'") == TRUE)
   {  
    
        header('Location: http://localhost:81/mycv/admin/kinhnghiem.php');
    
   }
  
}

?>