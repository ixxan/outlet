<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.faq {
  background-color: #eee;
  color: #337ab7;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  
  color: #23527c;
}

.panel {
  padding:5px 15px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Outlet - Post Items</title>
    
    <!-- Tab Logo -->
    <link href="../pages/images/tab_logo.png" rel="shortcut icon">
    
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 
    <div id="wrapper" style = "padding-top: 40px" >
        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0 ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!--Logo-->
                <a href="home.php">
                    <img src="images/outlet.png" width="180" height="54">
                </a>
            </div>
            
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                
             <?php
             session_start();
            //if logged in
            if(isset($_SESSION['userId']))
            {
                echo"
                
                <ul class='nav navbar-top-links navbar-right'>
                    <li class='dropdown'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <i class='fa fa-user fa-fw'></i> <i class='fa fa-caret-down'></i>
                        </a>
                        
                       <ul class='dropdown-menu'>
                            <li>
                                <p style='text-align:center; color:#337ab7'>Welcome, ".$_SESSION['userUsername']."</p>
                            </li>
                            <li>
                                <a href='/Project/pages/user_profile.php'><i class='fa fa-user fa-fw'></i> User Profile</a>
                            </li>
                            <li>
                                
                            </li>
                        
                            <li class='divider'></li>
                        
                            <li>
                                <a href='/Project/pages/UserSystemIncludes/logout.inc.php' method='post'><i class='fa fa-sign-out fa-fw'></i> Logout</a>
                            </li>
                        
                        </ul>
                    </li>
                </ul>";
                    
            }
                //if not logged in
            else 
            {
                echo"
                <ul class='nav navbar-top-links navbar-right'>
                    <li class='dropdown'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <i class='fa fa-user fa-fw'></i> <i class='fa fa-caret-down'></i>
                        </a>
                        <ul class='dropdown-menu'>
                            <li>
                                <a href='login.php'><i class='fa fa-sign-in fa-fw'></i> Login</a>
                            </li>
                            <li>
                                <a href='signup.php'><i class='fa fa-plus fa-fw'></i> Sign Up</a>
                            </li> 
                        </ul>
                    </li>
                </ul>";
            }
            ?>          
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <form action="/Project/pages/search_result.php" method="GET" name="searchForm">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" name="input" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                </div>
                            </form>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="postitems.php"><i class="fa fa-edit fa-fw"></i> Post Items</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-large fa-fw"></i> Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="products.php"><i class="fa fa-lightbulb-o fa-fw"></i> Products </a>
                                </li>
                                <li>
                                    <a href="services.php"><i class="fa fa-wrench fa-fw"></i> Services </a>
                                </li>
                                <li>
                                    <a href="coupons.php"><i class="fa fa-ticket fa-fw"></i> Coupons </a>
                                </li>
                                <li>
                                    <a href="giveaways.php"><i class="fa fa-gift fa-fw"></i> Giveaways </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="aboutus.php"><i class="fa fa-group fa-fw"></i> About Us</a>
                        </li>
                        <li>
                            <a href="faq.php"><i class="fa fa-question fa-fw"></i> FAQ</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style = "padding-top: 40px ">FAQ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- FAQ -->
            
                <button class="faq">
                    <a href="#" style="text-decoration: none">How do I post items on Outlet?<span class="fa arrow"></span></a>
                </button>
                    <div class="panel">
                      <p style="font-size:16px">Simply click on the "Post items" on the side navigation bar, then select what your would like to post and fill in the information.
                                              <br>(Note: Login is required to post items)</p>
                    </div>
                
                <button class="faq">
                    <a href="#" style="text-decoration: none">How do I change my password?<span class="fa arrow"></span></a>
                </button>
                    <div class="panel">
                      <p style="font-size:16px">Simply click on the "User Profile" tab, under the user dropdown that is on the top right corner of any page after logged in, then select "Change Password" and fill in the information!</p>
                    </div>
                
                <button class="faq">
                    <a href="#" style="text-decoration: none">How do I manage/delete my posts?<span class="fa arrow"></span></a>
                </button>
                    <div class="panel">
                      <p style="font-size:16px">Simply click on the "User Profile" tab, under the user dropdown that is on the top right corner of any page after logged in, then select "My Posts".</p>
                    </div>
                    
                <button class="faq">
                    <a href="#" style="text-decoration: none">How do I report issues on the items?<span class="fa arrow"></span></a>
                </button>
                    <div class="panel">
                      <p style="font-size:16px">Simply click on the "Report" button on the top right corner of certain item's detail page, then enter your message.</p>
                    </div>
                    
                <button class="faq">
                    <a href="#" style="text-decoration: none">Any other question?<span class="fa arrow"></span></a>
                </button>
                    <div class="panel">
                      <p style="font-size:16px">Please contact us at <a href="mailto:farragutqros@gmail.com??&subject=FAQ&body=Please enter your question:">Farragut Qros</a>(farragutqros@gmail.com). </p>
                    </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <script>
        var acc = document.getElementsByClassName("faq");
        var i;        
        
        for (i = 0; i < acc.length; i++) 
        {
            acc[i].addEventListener("click", function() 
            {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                
                if (panel.style.display === "block") 
                {
                    panel.style.display = "none";
                }
                else 
                {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    
    
</body>

</html>
