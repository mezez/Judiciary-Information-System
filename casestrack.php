<?php  
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
                        <div  class="col-sm-10 col-md-10 col-lg-10"><h2> ADMINISTRATOR PANEL </h2></div>
                        
                    </div> 
                    <div class="col-sm-12 col-md-4 col-lg-1 logout">
                        <a href="logoutprocess.php" class="btn btn-primary" role="button">Log Out</a>
                    </div>    
                </div>    
                <!--welcome message div-->
<!--                <div class="text-info">
                     <?php

                    
                    $name = $_SESSION['name']; ?> 

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
                                         
                                          <li class="active"><a href="casestrack.php">CASES TRACK</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="displayupdateproceeding.php">FILE/UPDATE CASE PROCEEDINGS</a></li>
                                              <li><a href="admin.php">ADMIN HOME</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                    </div>
                    </div>
                 
                 <div class="col-sm-12 col-md-12 col-lg-12 lineone">
                     <h3>Track all cases in the Judiciary Information System here.</h3>
                 </div>
                 <div class="col-sm-12 col-md-12 col-lg-12 linetwo">
                     <div class="col-sm-12 col-md-4 col-lg-4 lt" id="aa">
                         <a href="allcases.php" class="btn btn-primary btn-lg active" role="button">View All Cases</a>
                         <br>
                         <br>
                         <p>All the case records in the system can be found in this section.</p>

                     </div>
                     <div class="col-sm-12 col-md-4 col-lg-4 lt" id="bb">
                         <a href="alljudges.php" class="btn btn-primary btn-lg active" role="button">View Case By Judge</a>
                         <br>
                         <br>
                         <p>Here, you can track a case as categorized by Judges in the system.</p>
                     </div>
                     <div class="col-sm-12 col-md-4 col-lg-4 lt">
                         <a href="suitnumber.php" class="btn btn-primary btn-lg active" role="button">View Case By Suit No</a>
                         <br>
                         <br>
                         <p>Here, you can track a case as categorized by case title in the system.</p>
                     </div>
                 </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 linethree">
                      <div class="col-sm-12 col-md-4 col-lg-4 lt" id="aa">
                         <a href="#" class="btn btn-primary btn-lg active" role="button">View Case By Party</a>
                         <br>
                         <br>
                         <p>Here, you can track a case as categorized by parties involved.</p>
                     </div>
                     <div class="col-sm-12 col-md-4 col-lg-4 lt" id="bb">
                         <a href="alllawyers.php" class="btn btn-primary btn-lg active" role="button">View Case By Lawyer</a>
                         <br>
                         <br>
                         <p>Here, you can track a case as categorized by attorneys in the cases.</p>
                     </div>
                     <div class="col-sm-12 col-md-4 col-lg-4 lt">
                         <a href="allcourts.php" class="btn btn-primary btn-lg active" role="button">View Case By Court</a>
                         <br>
                         <br>
                         <p>Here, you can track a case as categorized by courts and their related cases.</p>
                     </div>
                 </div>
                    
              

