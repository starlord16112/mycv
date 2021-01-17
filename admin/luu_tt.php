<?php
session_start();
include '../connect.php';
 if(!isset( $_SESSION['admin']) or !isset($_GET['luu']))
 {
        header('Location: http://localhost:81/mycv');
        exit;
 }

 if(isset($_POST['ten']))
 {
                  $ten1 = $_POST['ten'];
                  $email1 =  $_POST['email'];
                  $sdt1 =  $_POST['sdt'];
                  $hv1 =  $_POST['hv'];            
                  $dc1 =  $_POST['dc'];
             
 if( mysqli_query($conn,"UPDATE thongtin SET ten = '$ten1',sdt = '$sdt1',mail = '$email1',hocvan   = '$hv1',diachi = '$dc1'") == TRUE)
 {

 
  header('Location: http://localhost:81/mycv/admin/thongtin.php?luu=ok');

         
                        
 }


}

                        






?>