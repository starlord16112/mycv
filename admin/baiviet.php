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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        button {
            margin: 35px 0;
        }

        table {
            margin: 100px 0;
        }

        div.thongtin {
            width: 70%;
            margin: 100px auto;
        }

        .row {
            margin: 50px 0;
        }

        img {
            width: 40px;
            height: 40px;
        }

        /* img
              {
                margin:0 190px;
                width:100%;
              }*/
    </style>
</head>

<body>



    <?php

                  include '../connect.php';
                  $query = mysqli_query($conn,"SELECT * FROM baiviet");
                  
                 


?>




    <div class="container">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên bài viết</th>
                    <th>Nội dung</th>
                    <th>Ảnh</th>
                    
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
  
                 while( $result = $query -> fetch_assoc()) {
                  $idbv = $result['id'];
                  $text = $result['text'];
                  $imgbv = $result['img'];
                  $title = $result['title'];           
                  
                     echo'<tr>
                    <td>'.$idbv.'</td>
                     <td>'.$title.'</td>
                     <td>'.$text.'</td>
                     <td><img src= ../assets/img/'.$result["img"].'></td>
                     <td><a href= ""  data-toggle="modal" data-target="#myModal1" class="editbtn"><i class="fas fa-edit"></i></a></td>
                     <td><a href="xoa_bv.php?id='.$idbv.'"><i class="fas fa-trash-alt"></i></a></td>                     
                     </tr>';
                 }
                
     
     ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm</button>
    </div>


    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <h1>Nhập thông tin bài viết</h1>
                <form method="post" action="them_bv.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" name="title" required>

                    </div>
                    <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Nội dung bài viết</span>
  </div>
  <textarea name="noidungbv"class="form-control" aria-label="With textarea" required></textarea>
</div>
<br>
                    Hình ảnh
                    <div class="form-group">
                        <input type="file"  name="file" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </form>


            </div>
        </div>
    </div>
    <?php
   if(isset($_GET['them']))
{
   echo '<script type="text/javascript">
  
swal("Yessss", "Thêm thành công", "success");


                        </script>';
                     
}
if(isset($_GET['xoa']))
{
   echo '<script type="text/javascript">

swal("Yessss", "Xóa thành công", "success");


                        </script>';
         
                        
}
if(isset($_GET['edit']))
{
  
   echo '<script type="text/javascript">

swal("Yessss", "Sửa thành công", "success");


                        </script>';
            
}
    ?>
    <!------------------------------------------------->
    <div class="modal" id="myModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                    <div class="row">
                        <div class="col-9">
                            <h1>Sửa bài viết</h1>
                            <form method="post" action="edit_bv.php?edit=true" enctype="multipart/form-data">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">ID</label>
                                    <input id="id" type="text" class="form-control" name="id"  readonly="true">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                    <input id="title" type="text" class="form-control" name="title" required>

                                </div>
                                
                               
             <div class="input-group">
              <div class="input-group-prepend">
              <span class="input-group-text">Nội dung bài viết</span>
                 </div>
             <textarea id="noidung"  name="noidungbv"class="form-control" aria-label="With textarea" required></textarea>
              </div>
                              <br>  

                                <div class="form-group">
                                    <input type="file" name="file" value="">
                                </div>
                                 
                                <button type="submit" class="btn btn-primary" name="submit1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

                </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"
        integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA=="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.editbtn').on('click', function () {
               $tr = $(this).closest('tr');    
               var data =$tr.children("td").map(function(){
                   return $(this).text();
               }).get();
               $('#id').val(data[0]);
               $('#title').val(data[1]);
               $('#noidung').val(data[2]);
                  

            });
        });
    </script>
</body>

</html>