<?php  
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

<link rel="stylesheet" type="text/css" href="css/authorized.css">
 <body>
        <div class="container">
            <div class="wrapper">
                <div class="row fline">
                    <div  class="col-sm-2 col-md-2 col-lg-2"><img class="img-responsive" src="img/small.jpg" alt="could not load image"></div>
                        <div  class="col-sm-10 col-md-10 col-lg-9"><h2> AUTHORIZED USER PANEL </h2></div> 
                    <div class="col-sm-12 col-md-4 col-lg-1 logout">
                        <a href="logoutprocess.php" class="btn btn-primary" role="button">Log Out</a>
                    </div>    
                </div>    
                <!--welcome message div-->
                <div class="text-info">
                     <?php

                    
                    $name = $_SESSION['name']; ?> 

                    <h2>Welcome <?php echo " ".$name ;?></h2>
                   
                    <!--end of welcome message div-->

                </div>
                 <!--header div-->
                 <div class="row head">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                       
                       
                        <nav class="navbar  navbar-inverse "
				  <div class="container-fluid ">
				    <div class="navbar-header ">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      
				    </div>
                                     
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav navbar-left">
                                         
                                          <li class="active"><a href="authorized.php">HOME</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="authrelatedcases.php">RELATED CASES</a></li>
                                        <li><a href="authallcases.php">ALL CASES</a></li>
                                        <li><a href="sendfeedback.php">SEND FEEDBACK</a></li>
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header--> 
                <br>
                <br>
                <div class="info col-sm-12 col-md-12 col-lg-12">
                    <h3>Welcome to the Judiciary Information System Authorized-User Panel</h3>.<br>
                    You can track cases in the system, both cases peculiar to you and all cases 
                    Here you can make request for Change of Account Details or send any important or necessary information or details to the administrator and the necessary actions will be taken as as soon as possible.
                    
                    You can also lay complaints about any issues encountered in using the system here and the issues will be looked into.
                </div>
                 </div>
            </div>
            