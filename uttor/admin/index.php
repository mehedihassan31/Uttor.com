<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
	 <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">

				<div class="floatleft middle">
                    <a href="../index.php"><h1>Uttor.com</h1></a>
				</div>
                <div class="floatright">

                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="../View/Auth/login.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.html"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="../profile/profile.html"><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="changepassword.html"><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href="inbox.html"><span>Inbox</span></a></li>
                <li class="ic-charts"><a href="postlist.html"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="titleslogan.html">Title & Slogan</a></li>
                                <li><a href="social.html">Social Media</a></li>
                                <li><a href="copyright.html">Copyright</a></li>
                                
                            </ul>
                        </li>
						
                         <li><a class="menuitem">Update Pages</a>
                            <ul class="submenu">
                                <li><a>About Us</a></li>
                                <li><a>Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="addcat.html">Add Category</a> </li>
                                <li><a href="catlist.html">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                <li><a href="addpost.html">Add Post</a> </li>
                                <li><a href="postlist.html">Post List</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">
                    <div><h3>Write Your Question</h3></div>
                    <form action="store.php" method="post">
                        <div style="margin-bottom: 15px;">
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title">
                        </div>
                        <div>
                            <textarea name="desc"></textarea>
                        </div>
                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-right btn btn-default" id="sendEmail">Submit &nbsp; &nbsp;
                                <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
         &copy; Copyright <a href="https://uttor.000webhostapp.com/project/index.html">uttor.com</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
