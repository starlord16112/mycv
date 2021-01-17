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
    $idbv=$_POST['id'];
    $title=$_POST['title'];
   $noidung=$_POST['noidungbv'];
    $filename =  $_FILES['file']['name'];
    if($filename == NULL)
    {
   if(mysqli_query($conn,"UPDATE baiviet SET title = '$title', text='$noidung' WHERE id='$idbv'" ) == TRUE)
   {  
    
        header('Location: http://localhost:81/mycv/admin/baiviet.php?edit=ok');
    
   }
}
else
{
 if(mysqli_query($conn,"UPDATE baiviet SET title = '$title', text='$noidung',img = '$filename' WHERE id='$idbv'") == TRUE)
   {  
    
        header('Location: http://localhost:81/mycv/admin/baiviet.php?edit=ok');
    
   }
}
  
}

?>