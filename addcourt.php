<?php  
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

<link rel="stylesheet" type="text/css" href="css/addjudge.css">
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
                                         
                                          <li class="active"><a href="addcourt.php">ADD COURT</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="admin.php">ADMIN HOME</a></li>
                                        
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                    </div>
                    </div>
                 
                 <div>
                     <form class="form-horizontal" action="processaddcourt.php"  method="post">
                            
                            <div class="fline col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                              <label for="mezez">Court Name </label> 
                              <input type="text" class="form-control" id="cfn" placeholder="Enter Court Name" name="name">
                            </div>
                            </div>    
                            <br>
                            <br>
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 bton">
                            <button type="submit" class="btn btn-default">ADD</button>
                            </div>    
                          </form>
                     
                 </div>
                 </div>
        </div>

