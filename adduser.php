 <?php
   require_once 'include/connection.php';
   require_once 'classes/UserClass.php';
   
   $name = $_POST['name'];
   $username = $_POST['uname'];
   $password = $_POST['pword'];
   $position = $_POST['select'];
   
   
  
       if(($name != "")and ($username != "") and ($password != "") and (isset($position)) )
       {
   $freshuser = new UserClass($name, $position, $username, $password);
   $freshuser->add_user($name, $position, $username, $password);
   }
   
   else {
            echo 'User Not Added, ensure to input all fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Error Adding New User</TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "newuser.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
   }
   
       

   