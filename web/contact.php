<?php
    require('./db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Resolute</title>

    <!-- slider stylesheet -->
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <!-- header section strats -->

    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <div class="logo float-left"><a class="navbar-brand" href="index.html"><img
                            src="./images/resolute logo - 146x56 pix.png" alt="Resolute"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="portfolio.html"> Portfolio </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Contact Us</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- 
			=============================================
				Conatct us Section
			============================================== 
			-->
    <div class="contact-us-section section-spacing">
        <div class="container">
            <div class="theme-title-one">
                <h2>GET IN TOUCH</h2>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
            </div> <!-- /.theme-title-one -->
            <div class="clearfix main-content no-gutters row">
                <div class="col-lg-5 col-12">
                    <div class="img-box"></div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="form-wrapper">
                        <form class="theme-form-one form-validation" autocomplete="off" method="POST">
                            <div class="row">
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name" required></div>
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone" required>
                                </div>
                                <div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email" required>
                                </div>
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="website" required>
                                </div>
                                <div class="col-12"><textarea placeholder="Message" name="message" required></textarea></div>
                            </div> <!-- /.row -->
                            <button type="submit" name="send" class="theme-button-one" onclick="sendMessage()">SEND MESSAGE</button>
                        </form>
                    </div> <!-- /.form-wrapper -->
                </div> <!-- /.col- -->
            </div> <!-- /.main-content -->
        </div> <!-- /.container -->

      <pre>
       <script>
        function sendMessage(){
            alert("sending message...");
        }
       </script>

      </pre>

    <!--
			=====================================================
				Footer
			=====================================================
			-->
    <footer class="theme-footer-one">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
                        <h6 class="title">About OUR Consulting</h6>
                        <p>That started from this tropic port aboard this tiny ship today still want by theam
                            government they survive on up to thetre east side to a deluxe as soldiers of artics
                            fortune.</p>
                        <div class="queries"><i class="flaticon-phone-call"></i> Any Queries : <a href="#">(+1) 234
                                567 900</a></div>
                    </div> <!-- /.about-widget -->
                    <div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
                        <h6 class="title">RECENT POSTS</h6>
                        <ul>
                            <li class="clearfix">
                                <img src="images/blog/1.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="blog-details.html">Till wanted by theam govern they survive as
                                        soldiers.</a>
                                    <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06,
                                        2018</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="images/blog/2.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="blog-details.html">World don't move to beat of just one drum.</a>
                                    <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Mar 20,
                                        2018</div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.footer-recent-post -->
                    <div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
                        <h6 class="title">PORTFOLIO</h6>
                        <ul>
                            <li><a href="#">HairDrama</a></li>
                            <li><a href="#">Delhi Toofan</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Financial Services</a></li>
                            <li><a href="#">Singhi Cement</a></li>
                        </ul>
                    </div> <!-- /.footer-list -->
                    <div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
                        <h6 class="title">NEWSLETTER</h6>
                        <form method="POST">
                            <input type="text" placeholder="Name *">
                            <input type="email" placeholder="Email *">
                            <button type="submit" class="theme-button-one">SUBSCRIBE</button>
                        </form>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-footer -->
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <p>&copy; Copyrights 2024. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <!-- <li><a href="service.html">Solutions</a></li> -->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.bottom-footer -->
    </footer> <!-- /.theme-footer -->

    <?php

        if(isset($_POST['send'])) 
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $message = $_POST['message'];

            $sql = "INSERT INTO `customer_info`(`name`, `phone`, `email`, `website`, `message`) VALUES ('$name', $phone, '$email', '$website', '$message')";
            $run_sql = mysqli_query($conn, $sql);
        }
    ?>
</body>

</html>