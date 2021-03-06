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
                  $query = mysqli_query($conn,"SELECT * FROM kinhnghiem");
                  
                 


?>




    <div class="container">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Thời gian</th>
                    <th>Công việc</th>
                    <th>Công ty</th>
                    <th>Logo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
  
                 while( $result = $query -> fetch_assoc()) {
                  $stt = $result['id'];
                  $congviec = $result['congviec'];
                  $time = $result['thoigian'];
                  $congty = $result['congty'];           
                  $id = $result['id'];
                     echo'<tr>
                    <td>'.$stt.'</td>
                     <td>'.$time.'</td>
                     <td>'.$congviec.'</td>
                     <td>'.$congty.'</td>
                     <td><img src= ../assets/img/'.$result["img"].'></td>
                     <td><a href= ""  data-toggle="modal" data-target="#myModal1" class="editbtn"><i class="fas fa-edit"></i></a></td>
                     <td><a href="xoa_kn.php?id='.$id.'"><i class="fas fa-trash-alt"></i></a></td>                     
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

                <h1>Nhập thông tin</h1>
                <form method="post" action="them_kn.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Thời gian</label>
                        <input type="text" class="form-control" name="time" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Công việc</label>
                        <input type="text"  class="form-control" name="congviec" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Công ty</label>
                        <input type="text" class="form-control" name="congty" required>
                    </div>
                    <div class="form-group">
                        <input type="file"  name="file" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </form>


            </div>
        </div>
    </div>
    <!------------------------------------------------->
    <div class="modal" id="myModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                    <div class="row">
                        <div class="col-9">
                            <h1>Sửa thông tin</h1>
                            <form method="post" action="edit_kn.php?edit=true" enctype="multipart/form-data">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">ID</label>
                                    <input id="id" type="text" class="form-control" name="id"  readonly="true">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời gian</label>
                                    <input id="time" type="text" class="form-control" name="time1" required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Công việc</label>
                                    <input type="text" id="cviec" class="form-control" name="congviec1" required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Công ty</label>
                                    <input type="text" id="cty" class="form-control" name="congty1" required>

                                </div>

                                

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
               $('#time').val(data[1]);
               $('#cviec').val(data[2]);
               $('#cty').val(data[3]);
               $('#img').val(data[4]);   

            });
        });
    </script>
</body>

</html>