<?php 
 require_once( 'include/session.php');
require_once( 'include/functions.php');
confirm_logged_in();
include_once 'include/adminheader.php'; ?>

<link rel="stylesheet" type="text/css" href="css/newuser.css">
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
                                         
                                          <li class="active"><a href="admin.php">ADD NEW USER</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">USERS</a></li>
                                        <li><a href="#">EDIT ADMIN ACCOUNT</a></li>
                                        
                                        <li><a href="admin.php">ADMIN HOME</a></li>
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <div class="userinfo col-sm-12 col-md-12 col-lg-12">
                    <h4>USER INFO</h4>
                </div>    
                    <div>
                        <form class="form-inline" action="adduser.php" method="post">
                            
                            <div class="fline ">
                            
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                              <label for="mezez">Name</label>
                              <input type="text" class="form-control" id="ln" placeholder="john Doe" name="name">
                            </div>
                             <div class="form-group col-lg-6 col-md-12 col-sm-12">
                              <label for="mezez">Position</label>
                              <select class="form-control" name="select">
                                <option>admin</option>
                                <option>authorized</option>
                              </select>
                            </div>
                            </div>    
                            <br>
                            <br>
                            
                            <div class="sline">
                            <div class="form-group sline col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Username</label>
                              <input type="text" class="form-control" id="un" placeholder="Doe" name="uname">
                            </div>
                            
                             <div class="form-group sline col-lg-4 col-md-12 col-sm-12">
                              <label for="exampleInputEmail2">Password</label>
                              <input type="password" class="form-control" id="ps" placeholder="****" name="pword">
                            </div>
                            </div>    
                            <br>
                            <br>
                            <button type="submit" class="btn btn-default">ADD</button>
                          </form>
                    </div>    
            </div>        
        </div>
</body>