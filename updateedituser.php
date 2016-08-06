<?php
require_once 'include/connection.php';
require_once 'classes/UserClass.php';
 
  $id = $_GET['id'];
   $name = $_POST['name'];
   $username = $_POST['uname'];
   $password = $_POST['pword'];
   $position = $_POST['select'];
   
   if(($name != "")&&($username != "")&&($password != "")&&isset($position))
   {
       $edituser = new UserClass($name, $position, $username, $password);
   $edituser->edit_user($name, $position, $username, $password, $id);
       
       
     }
     
     else
     {
         echo 'Update not Successful, ensure to input all fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "edituser.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
     }


   

