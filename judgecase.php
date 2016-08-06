<?php
    require_once 'include/connection.php';
    
    require_once 'classes/Judges.php';
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
                                          
                                         <?php  $id = $_GET['id'];
                                                $sql_sel="SELECT name FROM judge WHERE judge_id = $id";
                                                 $result = mysql_query($sql_sel);
                                                 $retrieved_name = mysql_fetch_array($result);
                                                 $name = $retrieved_name['name'];
                                                $sql_sel="SELECT judge FROM cases WHERE judge = '$name'";
                                                 $result2 = mysql_query($sql_sel);
                                                 $retrieved_case = mysql_fetch_array($result2);
                                                 
                                         ?>
                                          <li class="active"><a href="alljudges.php"><?php echo $retrieved_case['judge'];?></a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="alljudges.php">BACK</a></li>
                                              <li><a href="casestrack.php">CASES TRACK</a></li>
                                        <li><a href="admin.php">ADMIN HOME</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                    </div>
                    
                    
                 
                        <?php
                              echo '<div class="well col-sm-12 col-md-12 col-lg-12 lineone">';
                              $displayjudges = new Judges();
                              $displayjudges->DisplayRelatedCases($name);
                              echo '</div>';
                        ?>
                 
            </div>
 </body>

