<?php
include '../connect.php';
 session_start();
 if(!isset( $_SESSION['admin']))
 {
        header('Location: http://localhost:81/mycv');
        exit;
 }                
 
   
    if (isset($_POST['submit'])) {
    $time = $_POST['time'];
    $congviec = $_POST['congviec'];
    $congty = $_POST['congty'];
    $filename =  $_FILES['file']['name'];
    if(mysqli_query($conn,"INSERT INTO kinhnghiem(thoigian,congviec,congty,img) VALUES ('$time','$congviec','$congty','$filename')") == TRUE)
   {  
       header('Location: http://localhost:81/mycv/admin/kinhnghiem.php');
   }
    }
        
                   
?>