<?php  
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

<link rel="stylesheet" type="text/css" href="css/admin.css">
    
   
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="row fline">
                    <div class="col-sm-12 col-md-8 col-lg-11 log">
                         <div  class="col-sm-2 col-md-2 col-lg-2"><img class="img-responsive" src="img/small.jpg" alt="could not load image"></div>
                        <div  class="col-sm-10 col-md-10 col-lg-10"><h2> ADMINISTRATOR PANEL </h2></div>
                        
                    </div> 
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
                                         
                                          <li class="active"><a href="admin.php">ADMIN HOME</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
				        <li><a href="casestrack.php">CASES TRACK</a></li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADD/EDIT COURT(S)<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                              <li role="separator" class="divider"></li>
                                              <li><a href="addcourt.php">ADD COURT(s)</a></li>
                                              <li role="separator" class="divider"></li>
                                              <li><a href="showcourt.php">EDIT COURT(s)</a></li>
                                            </ul>
                                            </li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADD/EDIT JUDGE(S)<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                              <li role="separator" class="divider"></li>
                                              <li><a href="addjudge.php">ADD JUDGE(s)</a></li>
                                              <li role="separator" class="divider"></li>
                                              <li><a href="showjudge.php">EDIT JUDGE(s)</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADD/EDIT LAWYER(S)<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                              <li role="separator" class="divider"></li>
                                              <li><a href="addlawyer.php">ADD LAWYER(s)</a></li>
                                              <li role="separator" class="divider"></li>
                                              <li><a href="showlawyer.php">EDIT LAWYER(s)</a></li>
                                            </ul>
                                            </li>
				        <li><a href="users.php">USERS</a></li>
                                         <li><a href="viewfeedback.php">FEEDBACK</a></li>
                                        <li><a href="#">EDIT ADMIN ACC.</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header--> 
                <div class="body">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <h3>For Security Reasons, Always Ensure To Logout After Using The System!!</h3>
                    </div>
                    <div class="cases col-sm-12 col-md-12 col-lg-12">
                        <h4>CASES</h4>
                    </div>
                    <div class="casecontent col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <a href="filecase.php" <span class="fa-stack fa-5x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-folder-open fa-stack-1x fa-inverse"></i>
                                </span></a>
                    <h4 class="service-heading">FILE CASE</h4>
                        </div>
                         <div class="col-sm-12 col-md-12 col-lg-4">
                             <a href="displayupdatecase.php"<span class="fa-stack fa-5x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
                                 </span></a>
                              <h4 class="service-heading">UPDATE CASE</h4>
                        </div>
                         <div class="col-sm-12 col-md-12 col-lg-4">
                             <a href="deletecase.php"<span class="fa-stack fa-5x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                 </span></a>
                    <h4 class="service-heading">DELETE CASE</h4>
                        </div>
                    </div>
                    
                    <div class="cases col-sm-12 col-md-12 col-lg-12 ">
                        
                        <h4>USERS</h4>
                    </div>
                    <div class="usercontent col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                             <a href="newuser.php"<span class="fa-stack fa-5x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-plus-square fa-stack-1x fa-inverse"></i>
                                 </span></a>
                            <h4 class="service-heading">ADD USER</h4>
                        </div>
                         <div class="col-sm-12 col-md-12 col-lg-4">
                             <a href="edituser.php"<span class="fa-stack fa-5x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                                 </span></a>
                             <h4 class="service-heading">EDIT USER</h4>
                        </div>
                         <div class="col-sm-12 col-md-12 col-lg-4">
                             <a href="removeuser.php"<span class="fa-stack fa-5x">
                        <i class="fa fa-square fa-stack-2x text-primary"></i>
                        <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                                 </span></a>
                             <h4 class="service-heading">REMOVE USER</h4>
                        </div>
                    </div>
                    
                </div>
               
            
        </div>
         <!--end of wrapper-->
        </div> 
        <!--end of container-->        
    </body>
</html>






