<?php
    require_once 'include/connection.php';
    
    require_once 'classes/UserClass.php';
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

<link rel="stylesheet" type="text/css" href="css/casestrack.css">
 <body>
        <div class="container">
            <div class="wrapper">
                <div class="row fline">
                   <div class="col-sm-12 col-md-8 col-lg-11 log">
                         <div  class="col-sm-2 col-md-2 col-lg-2"><img class="img-responsive" src="img/small.jpg" alt="could not load image"></div>
                        <div  class="col-sm-10 col-md-10 col-lg-10"><h2> AUTHORIZED USER PANEL </h2></div>
                        
                    </div> 
                    <div class="col-sm-12 col-md-4 col-lg-1 logout">
                        <a href="logoutprocess.php" class="btn btn-primary" role="button">Log Out</a>
                    </div>    
                </div>    
                <!--welcome message div-->
<!--                <div class="text-info">
                     <?php

                    
                    $name = $_SESSION['name']; 
                    $rname = $_SESSION['rname'];
                    $uname = strtoupper($name);?>
                    

                    <h2>Welcome <?php echo " ".$name ;?></h2>-->
                   
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
                                         
                                          <li class="active"><a href="authrelatedcases.php.php">CASES PECULIAR TO <?php echo $uname;?></a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                            
                                             
                                              <li><a href="authorized.php">BACK</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                    </div>
                    
                    
                 <div class="col-sm-12 col-md-12 col-lg-12 lineone">
                         <?php
                              echo '<div class="well col-sm-12 col-md-12 col-lg-12 lineone">';
                              $displayrelcases = new UserClass();
                              $displayrelcases->DisplayRelatedCases($rname);
                              echo '</div>';
                        ?>
                 </div>
            </div>
 </body>

