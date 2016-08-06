<?php
     require_once 'include/functions.php';
     require_once 'include/connection.php';
     require_once 'classes/Court.php';
     require_once 'classes/CaseProceeding.php';
    require_once( 'include/session.php');
    
    include_once 'include/adminheader.php';
    $caseid = $_GET['id'];
    ?>
    
    <link rel="stylesheet" type="text/css" href="css/caseproceeding.css">
    <script src="plugins/ckeditor/ckeditor.js"></script>
    
    
   
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="row fline">
                    <div class="col-sm-12 col-md-8 col-lg-11 log">
                         <h2> ADMINISTRATOR PANEL </h2>
                    </div> 
                    <div class="col-sm-12 col-md-4 col-lg-1 logout">
                        <a href="logoutprocess.php" class="btn btn-primary" role="button">Log Out</a>
                    </div>    
                </div>    
                <!--welcome message div-->
                
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
                                         
                                          <li class="active"><a href="displayproceeding.php">PROCEEDINGS</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
				        
                                        <li><a href="admin.php">BACK TO ADMIN HOME</a></li>
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header-->
                
                <?php
                    $sql_sel="SELECT * FROM proceedings WHERE caseid = '$caseid'";
           $result = mysql_query($sql_sel);
           if(isset($result))
            {
               $retrieved_proceeding = mysql_fetch_array($result);
               
            
            }
            else{
                die(mysql_error());
            }
                    
                ?>
                
                <div class="lineone line col-sm-12 col-md-12 col-lg-12 well">
                         
                             <p>Case Title: <?php echo $retrieved_proceeding['casetitle'];?></p>
                         </div>
                         <div class="linetwo line col-sm-12 col-md-6 col-lg-12 well">
                             <p>Suit No: <?php echo $retrieved_proceeding['caseid']; ;?></p>
                         </div>
                     
                     <div class="linethree line col-sm-12 col-md-12 col-lg-12 well">
                          <p>Charging: <?php echo $retrieved_proceeding['charging'];?></p>
                     </div>
                     <div class="linefour line col-sm-12 col-md-12 col-lg-12 well">
                        
                             <p>Plea: <?php echo $retrieved_proceeding['plea'];?></p>
                         </div>
                         <div class="linefive line col-sm-12 col-md-6 col-lg-12 well">
                             <p>Calling of Prosecution witness to dock: <?php echo $retrieved_proceeding['calling1'];?></p>
                         </div>
                     
                     <div class="linesix line col-sm-12 col-md-12 col-lg-12 well">
                        
                             <p>Cross-examination of witness: <?php echo $retrieved_proceeding['exam1'];?></p>
                         </div>
                         <div class="lineseven line col-sm-12 col-md-6 col-lg-12 well">
                             <p>Calling of Defendant witness to dock: <?php echo $retrieved_proceeding['calling2'];?></p>
                         </div>
                    
                     <div class="lineeight line col-sm-12 col-md-12 col-lg-12 well">
                        
                             <p>Cross-examination of witness: <?php echo $retrieved_proceeding['exam2'];?></p>
                         </div>
                         <div class="linenine line col-sm-12 col-md-6 col-lg-12 well">
                             <p>Final Submissions of the counsels: <?php echo $retrieved_proceeding['submission'];?></p>
                         </div>
                         <div class="line10 line col-sm-12 col-md-6 col-lg-12 well">
                             <p>Adjournment: <?php echo $retrieved_proceeding['adjournment'];?></p>
                         </div>
                         <div class="lineeleven line col-sm-12 col-md-6 col-lg-12">
                             <p>Interlocutory Sittings: <?php echo $retrieved_proceeding['interlocutory'];?></p>
                         </div>
                         <div class="linetwelve line col-sm-12 col-md-6 col-lg-12 well">
                             <p>Final Judgement: <?php echo $retrieved_proceeding['judgement'];?></p>
                         </div>
                   
                
        </div>
 </div>
