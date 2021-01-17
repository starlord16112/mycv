<?php
include '../connect.php';
 session_start();
 if(!isset( $_SESSION['admin']))
 {
        header('Location: http://localhost:81/mycv');
        exit;
 }  
 
 
 if (isset($_POST['submit'])) 
 {
    $title = $_POST['title'];
    $text = $_POST['noidungbv'];
    
    $filename =  $_FILES['file']['name'];
   
    if($filename != NULL)
    {
    if(mysqli_query($conn,"INSERT INTO baiviet(title,text,img) VALUES ('$title','$text','$filename')") == TRUE)
   {  
       header('Location: http://localhost:81/mycv/admin/baiviet.php?them=true');
   }
}
else
{
    if(mysqli_query($conn,"INSERT INTO baiviet(title,text) VALUES ('$title','$text')") == TRUE)
   {  
       header('Location: http://localhost:81/mycv/admin/baiviet.php?them=true');
   }
}
 }
?>