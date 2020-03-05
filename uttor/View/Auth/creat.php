
<?php
  session_start();
  if(isset($_SESSION['Message'])){

      echo $_SESSION['Message'];
      unset($_SESSION['Message']);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uttor</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->

    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/blog-home.css" rel="stylesheet">
    <link href="../../style.css" rel="stylesheet">
    <link href="../../signup2/signup2.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>





<body>



<!-- Navigation -->
<nav style="background:#1b3b48" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../index.php"><b>Uttor.com</b></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../../Question/question.html">Questions</a>
                </li>
                <li>
                    <a href="../../job/job.html">Jobs</a>
                </li>


                <li>
                    <a href="../../topic/topic.html">Topics</a>
                </li>

                <li>
                    <a href="../../contact/contact.html">Contact</a>
                </li>
                <li>
                    <a href="../../admin/index.php">Dashboard</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign-up</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>






<div class="container1">

    <div class="row">


        <!-- Blog Entries Column -->
        <div class="col-md-8">


            <div class="testbox">
                <h1>Registration</h1>

                <form action="store.php" method="post">
                    <hr>

                    <hr>
                    <label id="icon" for="name"><i class="icon-user"></i></label>
                    <input type="text" name="username" placeholder="Username" required/><br>
                    <label id="icon" for="name"><i class="icon-envelope "></i></label>
                    <input type="email" name="email" placeholder="Email " required/><br>

                    <label id="icon" for="name"><i class="icon-shield"></i></label>
                    <input type="password" name="password"  placeholder="Password" required/>

                    <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
                    <br>

                    <a href="login.php" class="button">Log in</a>

                    <input style="font-size: 14px;
    font-weight: 600;
    color: white;
    padding: 6px 25px 20px 20px;
    margin: 10px 8px 20px 0px;
    display: inline-block;
    float: right;
    text-decoration: none;
    width: 90px; height: 27px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #3a57af;
    -webkit-box-shadow: 0 3px rgba(58,87,175,.75);
    -moz-box-shadow: 0 3px rgba(58,87,175,.75);
    box-shadow: 0 3px rgba(58,87,175,.75);
    transition: all 0.1s linear 0s;
    top: 0px;
    position: relative;" type="submit"  value="Sign up"/>

                </form>
            </div>




            <!-- First Blog Post -->


            <hr>



            <hr>
            <!-- Pager -->


            <!--

             Blog Sidebar Widgets Column -->

        </div>

    </div>

    <!-- /.row -->
    <hr>


</div>
</div>
</div>








<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row footer-top-inner">
                <div class="col-sm-3">
                    <div class="footer-text">
                        <h4>About us</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><br>
                            sunt in culpa qui officia deserunt mollit anim id est laborum..
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="footer-menu">
                        <h4>Site Map</h4>
                        <ul>
                            <li><a href="../../index.php">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-address">
                        <h4>Our Address</h4>
                        <ul>
                            <li>
                                <a  class="house-ico" href="#">
                                    Mirpur shoping complex,Mirpur 2,1216,Dhaka, Bangladesh
                                </a>
                            </li>
                            <li>
                                <a class="phone-ico" href="#">
                                    0123 4567890
                                </a>
                            </li>
                            <li>
                                <a class="msge-ico" href="#">
                                    info@dream.com
                                </a>
                            </li>
                            <li>
                                <a class="fax-ico" href="#">
                                    FAX: (000) 123-333
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-right">
                        <h4>Map</h4>

                        <div class="footer-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.902189729507!2d90.39136381445593!3d23.750867094676504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS+Institute+of+Technology+%26+Management!5e0!3m2!1sbn!2sbd!4v1492194995063" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-xs-12">
                <h5>Copyright © 2017 <a target="_new" href="">DREAM</a></h5>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owl.carousel.1/owl.carousel.min.js"></script>
<script src="nivo.slider/nivo.slider.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/isotope.pkged.min.js"></script>

<script src="js/main.js"></script>










</footer>



<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>
