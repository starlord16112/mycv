<?php
session_start();
include '../connect.php';
 if(!isset( $_SESSION['admin']) or !isset($_GET['id']))
 {
        header('Location: http://localhost:81/mycv');
        exit;
 }
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM kinhnghiem WHERE id = '$id'");
if($query)
{
      header('Location: http://localhost:81/mycv/admin/kinhnghiem.php');
}

?>