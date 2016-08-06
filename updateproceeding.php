<?php
     require_once 'include/functions.php';
     require_once 'include/connection.php';
     require_once 'classes/Court.php';
    require_once( 'include/session.php');
    
    include_once 'include/adminheader.php';
    
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
                                         
                                          <li class="active"><a href="caseproceeding.php">PROCEEDINGS</a></li>
                                        </ul>    
                                          <ul class="nav navbar-nav navbar-right">
				        
                                        <li><a href="admin.php">BACK TO ADMIN HOME</a></li>
				      </ul>
				      
				    </div>
                                      
				  </div>
                                  
				</nav>
                   
                    
                </div>
                <!--end of the header-->
                
                <div class="lineone col-lg-12 col-md-12 col-sm-12">
                    <h3>FILE/UPDATE CASE PROCEEDINGS</h3>
                    <br><br>
                   
                </div> 
                <?php
                                         $caseid = $_GET['id'];
                                         $casetitle = $_GET['casetitle'];
                                          $sql_sel="SELECT * FROM proceedings WHERE caseid = $caseid LIMIT 1";
                                             $result = mysql_query($sql_sel);
                                              if(isset($result))
                                              {
                                                  $retrieved_proceeding = mysql_fetch_array($result);
                                              }
                                         
                                         ?>
                
                <div class="linetwo col-lg-12 col-md-12 col-sm-12">
                    <form class="form-inline" action="processupdateproceeding.php?caseid=<?php echo $caseid;?>&&casetitle=<?php echo $casetitle;?>" method="post">
                         <div class="form-group ">
                                <label for="mezez">1. Charging In Court :</label>
                                 <textarea class="form-control" rows="2" cols="70"  name="charging"> <?php echo $retrieved_proceeding['charging'];?></textarea>
                          </div><br><br>
                        <div class="form-group">
                                <label for="mezez">2. Plea :</label>
                                 <textarea class="form-control" rows="2" cols="70" id="casedeetail" name="plea"> <?php echo $retrieved_proceeding['plea'];?></textarea>
                              </select>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">3. Calling of Prosecution/Plaintiff Witness  :</label>
                                 <textarea class="form-control" rows="2" cols="70"  name="calling1"> <?php echo $retrieved_proceeding['calling1'];?></textarea>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">4. Cross-examination of the Prosecution/Plaintiff Witness  :</label>
                                 <textarea class="form-control" rows="2" cols="70"  name="exam1"> <?php echo $retrieved_proceeding['exam1'];?></textarea>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">5. Calling of Defendant Witness  :</label>
                                 <textarea class="form-control" rows="2" cols="70"  name="calling2"> <?php echo $retrieved_proceeding['calling2'];?></textarea>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">6. Cross-examination of the Defendant Witness  :</label>
                                 <textarea class="form-control" rows="2" cols="70"  name="exam2"> <?php echo $retrieved_proceeding['exam2'];?></textarea>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">7. Submission of Final Address By counsel to Defendant and Prosecution/Plaintiff respectively  :</label>
                                 <textarea class="form-control" rows="2" cols="50"  name="submission"> <?php echo $retrieved_proceeding['submission'];?></textarea>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">8. Adjournment  :</label>
                                 <textarea class="form-control" rows="2" cols="70"  name="adjournment"> <?php echo $retrieved_proceeding['adjournment'];?></textarea>
                          </div><br><br>
                          <div class="form-group">
                                <label for="mezez">9. Interlocutory Sittings(IF ANY)  :</label>
                                 <textarea class="form-control" rows="5" cols="50"  name="interlocutory"> <?php echo $retrieved_proceeding['interlocutory'];?></textarea>
                          </div><br><br>
                           <div class="form-group">
                                <label for="mezez">10. Judgement Day  :</label>
                                 <textarea class="form-control" rows="5" cols="50"  name="judgement"> <?php echo $retrieved_proceeding['judgement'];?></textarea>
                          </div><br><br>
                            <div class="col-lg-12 col-md-12 col-sm-12 bton">
                            <button type="submit" class="btn btn-default">submit</button>
                            </div>  <br><br><br>
                    </form>
                </div>
                
                <div>
                    
  </div>


