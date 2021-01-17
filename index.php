<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang chủ</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        #contact {
            background: #1ABC9C;
        }
       
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">MyCV</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Bài viết</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">Thông tin</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#kinhnghiem">Kinh nghiệm</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">Liên hệ</a></li>

                    <li id="btn_login" class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php"
                            data-toggle="modal" data-target="#myModal">Chỉnh
                            sửa</a></li>
                    <li id="btn_admin" class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admin/">Admin</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <?php
     session_start();
     if(isset($_SESSION['admin']))
     {
      echo '<script>document.getElementById("btn_admin").style.display = "block";
      document.getElementById("btn_login").style.display = "none";
      </script>';
      }
      else
      {
          echo '<script>document.getElementById("btn_admin").style.display = "none";
            document.getElementById("btn_login").style.display = "block";
        </script>';
      }
 
?>

    <!-- <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                        <h1>Bạn cần đăng nhập</h1>
                        <form method="post" action="login.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" name="pass" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                        </form>
                   
            </div>
        </div>
    </div> -->


     <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form method="post" action="login.php" id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="email" required id="login-username" type="email" class="form-control" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control"name="pass" required placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-primary" name="submit">Login</button>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
               </div>
        </div>
    </div>

    <?php
                    include 'connect.php';
                    $query = mysqli_query($conn,"SELECT * FROM thongtin");
                    $result = $query -> fetch_assoc();
                  $avatar = $result['avatar'];
                  $ten = $result["ten"];
                  $dc = $result['diachi'];
                  $sdt = $result['sdt'];
                  $email = $result['mail'];
                  $hocvan = $result['hocvan'];
                    if(isset($_GET['login']))
                    {
                        echo '<script type="text/javascript">

                            swal("Oops", "Sai tài khoản hoặc mật khẩu", "error")


                        </script>';
                       
                    }
                    
                    ?>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src=<?php echo"assets/img/".$avatar;?> alt="" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0"><?php echo $ten;?></h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer -
                Illustrator</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
       
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bài viết</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                     <?php
         $querybv = mysqli_query($conn,"SELECT * FROM baiviet");
                 while( $resultbv = $querybv -> fetch_assoc()) {
                  $idbv = $resultbv['id'];
                  $title = $resultbv['title'];
                  $text = $resultbv['text'];
                  $imgbv = $resultbv['img']; 
                  echo  '<div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal'.$idbv.'">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/'.$imgbv.'" alt="" />
                    </div>
                </div>'   ;      
                 
                 
                 echo '<div class="portfolio-modal modal fade" id="portfolioModal'.$idbv.'" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal1Label">'.$title.'</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/'.$imgbv.'" alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">'.$text.'
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
                 }
        ?>
                
               
                <!-- <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="" />
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="" />
                    </div>
                </div>
            
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/game.png" alt="" />
                    </div>
                </div>
              
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="" />
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="" />
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">


        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Giới thiệu</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Em có đam mê với công nghệ thông tin,là một người điềm tĩnh,thích ứng nhanh với môi trường mới,không ngại khó,hòa đồng và luôn học hỏi những kiến thức ,công nghệ mới ,cố gắng tìm giải pháp cho mọi vấn đề. </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead"><?php echo '<i class="far fa-envelope-open"></i> '.$email.'<br>';
                    echo '<i class="fas fa-phone"></i>  '.$sdt.'<br>'; 
                    echo '<i class="fas fa-map-marker-alt"></i> '.$dc.'<br>'; 
                    echo '<i class="fas fa-graduation-cap"></i> '.$hocvan.'<br>';  ?></p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                    <i class="fas fa-download mr-2"></i>
                    Free Download!
                </a>
            </div>
        </div>
    </section>
    <!-- kinh nghiem section -->
    <section class="page-section  mb-0" id="kinhnghiem">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kinh nghiệm</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

        </div>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <?php
                 $query = mysqli_query($conn,"SELECT * FROM kinhnghiem");
                 while($row = $query->fetch_assoc()) {
                     echo '<div class="d-flex flex-row mt-3 exp-container"><img src= assets/img/'.$row["img"].' width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">'.$row["congviec"].'</span><span class="d-block text-black-50 labels">'.$row["congty"].'</span><span class="d-block text-black-50 labels">'.$row["thoigian"].'</span></div>
                </div>
                <hr>' ;
              }
            
            ?>
                    <!--  <div class="d-flex flex-row mt-3 exp-container"><img src="https://i.imgur.com/azSfBM3.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Senior UI/UX Designer</span><span class="d-block text-black-50 labels">Twitter Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div>
                <hr>
                <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/100/000000/facebook.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">Senior UI/UX Designer</span><span class="d-block text-black-50 labels">Facebook Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div>
                <hr>
                <div class="d-flex flex-row mt-3 exp-container"><img src="https://img.icons8.com/color/50/000000/google-logo.png" width="45" height="45">
                    <div class="work-experience ml-1"><span class="font-weight-bold d-block">UI/UX Designer</span><span class="d-block text-black-50 labels">Google Inc.</span><span class="d-block text-black-50 labels">March,2017 - May 2020</span></div>
                </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
        </div>
        <div class="container">

            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="sendmail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Để lại tin nhắn</h3>
                                    <p class="m-0">Điền thông tin</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="ct_name"
                                            placeholder="Your name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="ct_email"
                                            placeholder="example@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="mess" placeholder="Message"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
            </div>
        </div>

        <!--  <div class="row">
                <div class="col-lg-8 mx-auto">
                    
                    <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action = "sendmail.php">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required="required"
                                    data-validation-required-message="Please enter your name." name = "contact_name"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input class="form-control" id="email" type="email" placeholder="Email Address"
                                    required="required"
                                    data-validation-required-message="Please enter your email address." name = "contact_email"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number"
                                    required="required"
                                    data-validation-required-message="Please enter your phone number."name = "contact_phone" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter a message." name = "m"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br />
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                                type="submit">Send</button></div>
                    </form>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        <?php echo $dc;?>

                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/manhpt.tlu/"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/MnhNguy61610230"><i
                            class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Your Website 2020</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    
   <!-- 
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                              
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal2Label">Tasty Cake</h2>
                             
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                             
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="" />
                                
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->
    <!-- <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal3Label">Circus Tent</h2>
                                
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="" />
                               
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                               
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal4Label">Controller</h2>
                                
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                              
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" />
                         
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                               
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal5Label">Locked Safe</h2>
                         
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                              
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                               
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal6Label">Submarine</h2>
                               
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                               
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                                
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore
                                    quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>