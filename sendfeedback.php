<?php  
 require_once( 'include/session.php');
 require_once( 'include/functions.php');
  confirm_logged_in();
  include_once 'include/adminheader.php';
 
?>

<link rel="stylesheet" type="text/css" href="css/sendfeedback.css">
 <script src="plugins/ckeditor/ckeditor.js"></script>
 
 <div class="container">
            <div class="wrapper">
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
                                         
                                          <li class="active"><a href="sendfeedback.php">FEEDBACK</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="authorized.php">BACK TO HOME</a></li>
                                              <li><a href="logoutprocess.php">LOGOUT</a></li>
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header--> 
                
                <div>
                    <form class="form-inline" action="processfeedback.php" method="post">
                            
                        
                            <div class="fline ">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <label for="mezez">Username: </label> <br>
                              <input type="text" class="form-control col-sm- col-lg-12" id="title" placeholder="Username" name="uname">
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <label for="mezez">Phone No: </label> <br>
                              <input type="text" class="form-control col-sm- col-lg-12" id="title" placeholder="Phone No" name="phone">
                            </div> 
                 
                               
                            </div>  
                        <br>
                            <div class="sline ">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label for="mezez">Title: </label> <br>
                              <input type="text" class="form-control col-sm- col-lg-12" id="title" placeholder="Please Enter Title of Message" name="title">
                            </div>
                            </div>  
                        <br>
                        <br>
                        <div class="tline">
                             <div class=" form-group">
                                 <label for="mezez">Feedback / Complaint:</label>
                                 <br>
                                 <textarea class="form-control ckeditor" rows="10" cols="70" id="casedeetail" name="message" placeholder="Type your Message Here..."></textarea>
                              </div>
                            </div>    
                        
                              <div class="col-lg-12 col-md-12 col-sm-12 bton">
                                  <br>
                                  <br>
                            <button type="submit" class="btn btn-default">submit</button>
                            </div>
                    </form>
                </div>
            </div>    
 </div>
