<?php  
 require_once( 'include/session.php');
 require_once( 'include/connection.php');
 require_once ('include/functions.php');
 require_once ('classes/FeedBack.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

<link rel="stylesheet" type="text/css" href="css/casetrack.css">
    
   
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="row firstline">
                    <div class="col-sm-12 col-md-8 col-lg-11 log">
                         <div  class="col-sm-2 col-md-2 col-lg-2"><img class="img-responsive" src="img/small.jpg" alt="could not load image"></div>
                        <div  class="col-sm-10 col-md-10 col-lg-10"><h2> ADMINISTRATOR PANEL </h2></div>
                        
                    </div> 
                    <div class="col-sm-12 col-md-4 col-lg-1 logout">
                        <a href="logoutprocess.php" class="btn btn-primary" role="button">Log Out</a>
                    </div>    
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
                                         
                                          <li class="active"><a href="viewfeedback.php">FEEDBACK</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">BACK TO ADMIN HOME</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header--> 
                <?php 
                    $phone = $_GET['id'];
                    
                ?>
                <div class="message col-lg-8 col-md-8 col-sm-12 well">
                    <?php
                        $detail = new FeedBack();
                        $detail->RetrieveMsg($phone);
                    ?>
                    
                    <br>
                        [For Convenience and Ease of Use, Be sure to Delete message after Attending to it]<br><br>
                        <?php echo "<a href='deletefeedback.php?phone='.$phone.' class='btn btn-primary' role='button'>Delete Message</a>";
                            ?>
                    
                    
                    
                </div>
