<?php
     require_once 'include/functions.php';
     require_once 'include/connection.php';
     require_once 'classes/Court.php';
    require_once( 'include/session.php');
    
    include_once 'include/adminheader.php';?>
    
    <link rel="stylesheet" type="text/css" href="css/filecase.css">
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
                                         
                                          <li class="active"><a href="filecase.php">FILE CASE</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">CASES TRACK</a></li>
				        <li><a href="#">USERS</a></li>
                                        <li><a href="#">EDIT ADMIN ACCOUNT</a></li>
                                        <li><a href="admin.php">BACK TO ADMIN HOME</a></li>
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header-->
                
                <div>
                    <form class="form-inline" action="processfile.php"  method="post">
                            
                            <div class="fline ">
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Party A </label> 
                              <input type="text" class="form-control" id="cfn" placeholder="Enter Complainants..." name="complainants">
                            </div>
                                
                                <div class="form-group col-lg-4 col-md-12 col-sm-12 pp">
                                    <p>VS</p>
                                </div>    
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Party B </label>
                              <input type="text" class="form-control" id="cln" placeholder="Enter Defendants..." name="defendants">
                            </div>
                             
                            
                            </div>    
                            <br>
                            <br>
                            
                            <div class="sline ">
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                              <label for="mezez">Party A's Lawyer</label> 
                             <select class="form-control" name="palwayer">
                                <?php displaylawyers() ?>
                              </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                              <label for="mezez">Party B's Lawyer</label>
                               <select class="form-control" name="pblawyer">
                                <?php displaylawyers() ?>
                              </select>
                            </div>
                            </div>    
                            <br>
                            <br>    
                            
                            <div class="tline">
                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Case Classification</label>
                              <select class="form-control" name="classification">
                                <option>Civil</option>
                                <option>Felonies</option>
                                <option>Misdeameanor</option>
                                <option>Simple Offences</option>
                              </select>
                            </div>
                                
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Court Room</label>
                              <select class="form-control" name="court">
                                <?php 
                                    $court = new Court();
                                    $court->GetAllCourts();
                                ?>
                              </select>
                            </div>
                                
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Sitting Date</label> 
                              <input type="date" class="form-control" id="dt" name="date">
                            </div>
                            </div>    
                            <br>
                            <br>
                            
                             <div class="ffine">
                                 <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                      <label for="mezez">Case Title:</label>
                                      <input type="text" class="form-control" id="ct" name="casetitle" placeholder="Enter case title">
                                 </div>
                                 <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                     <label for="mezez">Status:</label>
                                     <select class="form-control" name="status">
                                <option>Arraignment</option>
                                <option>Trial</option>
                                <option>Judgement</option>
                                <option>Completed</option>
                              </select>
                                 </div>
                               
                             </div>
                            
                            <div class="fifline">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                               
                              <div class="form-group">
                                <label for="mezez">Case Details:</label>
                                <textarea class="form-control ckeditor" rows="10" cols="70" id="casedeetail" name="casedetails"></textarea>
                              </div>
                            </div>
                            </div>
                            <br>
                            <br><br>
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 bton">
                            <button type="submit" class="btn btn-default">submit</button>
                            </div>    
                          </form>
                    </div> 

