<?php
    require_once 'include/connection.php';
    
    require_once 'classes/Lawyers.php';
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

 <?php  $id = $_GET['id'];
    $sql_sel="SELECT name FROM lawyer WHERE id = $id";
     $result = mysql_query($sql_sel);
     $retrieved_name = mysql_fetch_array($result);
     $name = $retrieved_name['name'];
    $sql_sel2="SELECT * FROM cases WHERE partyAlawyer = '$name' OR partyBlawyer = '$name'";
     $result2 = mysql_query($sql_sel2);
     $retrieved_case = mysql_fetch_array($result2);
     if($retrieved_case['partyAlawyer']==$name){
         $mname = $retrieved_case['partyAlawyer'];
    }else{
         $mname = $retrieved_case['partyBlawyer'];
     }
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
                                          
                                        
                                          <li class="active"><a href="lawyercase.php"><?php echo $mname?></a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="alllawyers.php">BACK</a></li>
                                              <li><a href="casestrack.php">CASES TRACK</a></li>
                                        <li><a href="admin.php">ADMIN HOME</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                    </div>
                    
                    
                 
                        <?php
                              echo '<div class="well col-sm-12 col-md-12 col-lg-12 lineone">';
                              $case = new Lawyers();
                              $case->DisplayRelatedCases($mname);
                              echo '</div>';
                        ?>
                 
            </div>
 </body>

