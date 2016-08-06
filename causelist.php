<?php include 'include/header.php';
         require_once 'include/connection.php';
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
    
   
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="row fline">
                    <div class="col-sm-12 col-md-8 col-lg-7">
                        <div >
                        <div  class="col-sm-3 col-md-3 col-lg-3"><img class="img-responsive" src="img/Blind2.jpg" alt="could not load image"></div>
                        <div  class="col-sm-9 col-md-9 col-lg-9"><h2> JUDICIARY INFORMATION SYSTEM </h2></div>
                        </div>
                        <h4><i>Ubi Jus Ibi Remedium...</i></h4>
                    </div> 
                    <div class="col-sm-12 col-md-4 col-lg-5 log">
                        <form class="form-horizontal" role="form" action="processlogin.php" method="post">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="username">Username:</label>
                              <div class="col-sm-10 col-lg-10">
                                  <input type="name" class="form-control" id="username" placeholder="Enter username" name="username" >
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Password:</label>
                              <div class="col-sm-10 col-lg-10"> 
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                              </div>
                            </div>
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                  <label><input type="checkbox"> Remember me</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group"> 
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Login</button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
                 <div class="row head">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                       
                       
                        <nav class="navbar force navbar-inverse "
				  <div class="container-fluid ">
				    <div class="navbar-header ">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav navbar-right">
                                          <li class="active"><a href="causelist.php">CAUSE LIST</a></li>
				        <li><a href="#">SERVICES</a></li>
                                        <li><a href="index.php">HOME</a></li>
				      </ul>
				      
				    </div>
				  
				</nav>
                   </div>
                    
                </div>
                <!--end of the header--> 
                <div class=" one col-sm-12 col-lg-12 col-md-12 well">
                    <?php
                                    $sql_sel="SELECT * FROM cases";
                        $result = mysql_query($sql_sel);

                            if(isset($result))
                            {
                                while($retrieved_cases = mysql_fetch_array($result))
                                {
                                    echo $retrieved_cases['id'].". ".$retrieved_cases['casetitle'];
                                    echo '<br>';
                                    echo "<A HREF = 'usercaseinfo.php?id=".$retrieved_cases['id']."'>".$retrieved_cases['partyA']." VS ". $retrieved_cases['partyB'].'</A>';
                                    echo '<br>';

                                }

                            }else{
                                die(mysql_error());
                            }
                    ?>
                </div>

