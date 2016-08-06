<?php
    require_once( 'include/session.php');
    require_once( 'include/connection.php');
    include_once 'include/adminheader.php';
require_once( 'include/functions.php');?>
    
    
    <link rel="stylesheet" type="text/css" href="css/filecase.css">
    <script src="plugins/ckeditor/ckeditor.js"></script>
    
    
   
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
                                          
                                           <?php
                                         $id = $_GET['id'];
                                          $sql_sel="SELECT * FROM cases WHERE id = $id LIMIT 1";
                                             $result = mysql_query($sql_sel);
                                              if(isset($result))
                                              {
                                                  $retrieved_case = mysql_fetch_array($result);
                                              }
                                         
                                         ?>
                                         
                                          <li class="active"><a href="processupdatecase.php">UPDATE <?php echo $retrieved_case['casetitle']?></a></li>
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
                        <form class="form-inline" action="finalupdatecase.php?id=<?php echo $id;?>" method="post">
                            
                            <div class="fline ">
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Party A </label> 
                              <input type="text" class="form-control" id="cfn" name="complainants" value="<?php echo $retrieved_case['partyA'];?>">
                            </div>
                                
                                <div class="form-group col-lg-4 col-md-12 col-sm-12 pp">
                                    <p>VS</p>
                                </div>    
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Party B </label>
                              <input type="text" class="form-control" id="cln" name="defendants" value="<?php echo $retrieved_case['partyB'];?>">
                            </div>
                             
                            
                            </div>    
                            <br>
                            <br>
                            
                            <div class="sline ">
                            
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Party A's Lawyer</label> 
                              <input type="text" class="form-control" id="dfn" name="palawyer" value="<?php echo $retrieved_case['partyAlawyer'];?>">
                            </div>
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Party B's Lawyer</label>
                              <input type="text" class="form-control" id="dln" name="pblawyer" value="<?php echo $retrieved_case['partyBlawyer'];?>">
                            </div>
                            </div>    
                            <br>
                            <br>    
                            
                            <div class="tline">
                                <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Case Classification  [current class:<?php echo $retrieved_case['classification'];?>]</label>
                              <select class="form-control" name="classification">
                                <option>General Civil</option>
                                <option>Family and Probate</option>
                                <option>Commercial</option>
                                <option>Mortgages and Revenue</option>
                              </select>
                            </div>
                                
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Court Room  [current room:<?php echo $retrieved_case['courtroom'];?>]</label>
                              <select class="form-control" name="court">
                                <option>Court Room 1</option>
                                <option>Court Room 2</option>
                                <option>Court Room 3</option>
                                <option>Court Room 4</option>
                              </select>
                            </div>
                                
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                              <label for="mezez">Next Sitting Date</label> 
                              <input type="date" class="form-control" id="dt" name="date">
                            </div>
                            </div>    
                            <br>
                            <br>
                            
                             <div class="ffine">
                                 <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                      <label for="mezez">Case Title:</label>
                                      <input type="text" class="form-control" id="ct" name="casetitle" value="<?php echo $retrieved_case['casetitle'];?>">
                                 </div>
                                 <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                     <label for="mezez">Status [current status:<?php echo $retrieved_case['status'];?>]:</label>
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
                                <textarea class="form-control ckeditor" rows="10" cols="70" id="casedeetail" name="casedetails" value=""><?php echo $retrieved_case['casedetails'];?></textarea>
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