<?php  
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
 require_once( 'include/connection.php');
 
  confirm_logged_in();
  include_once 'include/adminheader.php';
  
                                        $id = $_GET['id'];

                                     
 
?>

<link rel="stylesheet" type="text/css" href="css/caseinfo.css">
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
                    
<!--                welcome message div-->
                <div class="text-info">
                     <?php

                    
                    $name = $_SESSION['name']; ?> 

                    <h2>Welcome <?php echo " ".$name ;?></h2>
                   
<!--                    end of welcome message div-->

                </div>
<!--                 header div-->
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
                                         
                                          <li class="active"><a href="caseinfo.php">CASE INFO</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                               <li><?php echo "<a href='displayproceeding.php?id=".$id."'>VIEW PROCEEDINGS</a>";?></li>
                                               <li><?php echo "<a href='processupdatecase.php?id=".$id."'>EDIT THIS CASE</a>";?></li>
                                              <li><a href="allcases.php">BACK</a></li>
                                              
                                              <li><a href="casestrack.php">CASE TRACK</a></li>
                                              <li><a href="admin.php">ADMIN HOME</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                    </div>
                     
                        <?php 
                            
                            $sql_sel="SELECT * FROM cases WHERE id = $id LIMIT 1";
                               $result = mysql_query($sql_sel);
                                if(isset($result))
                                {
                                    $retrieved_case = mysql_fetch_array($result);
                                } 
                        ?> 
                     
                     <div class="lineone col-sm-12 col-md-12 col-lg-12 well">
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Case Title: <?php echo $retrieved_case['casetitle'];?></p>
                         </div>
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Suit No: <?php echo $retrieved_case['id'];?></p>
                         </div>
                     </div>
                     <div class="linetwo col-sm-12 col-md-12 col-lg-12 well">
                          <p>Judge: <?php echo $retrieved_case['judge'];?></p>
                     </div>
                     <div class="linethree col-sm-12 col-md-12 col-lg-12 well">
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Complainant(s): <?php echo $retrieved_case['partyA'];?></p>
                         </div>
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Defendant(s): <?php echo $retrieved_case['partyB'];?></p>
                         </div>
                     </div>
                     <div class="linefour col-sm-12 col-md-12 col-lg-12 well">
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Complainant(s)' Attorney: <?php echo $retrieved_case['partyA'];?></p>
                         </div>
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Defendant(s): <?php echo $retrieved_case['partyB'];?></p>
                         </div>
                     </div>
                     <div class="linefive col-sm-12 col-md-12 col-lg-12 well">
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Classification: <?php echo $retrieved_case['classification'];?></p>
                         </div>
                         <div class="innerone col-sm-12 col-md-6 col-lg-6">
                             <p>Status: <?php echo $retrieved_case['status'];?></p>
                         </div>
                     </div>
                     
                     <div class="linesix col-sm-12 col-md-12 col-lg-12 well">
                         <p>Details:</p> 
                          <br>
                          <p><?php echo $retrieved_case['casedetails'];?></p>
                     </div>
                 
        </div>
    </div>

