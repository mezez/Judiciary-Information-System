<?php
require_once ('include/connection.php');
    require_once ('include/session.php');
    
$name = $_POST['name'];
$id = $_GET['id'];

if($name != "")
{
     $sql_update = "UPDATE court SET courtroom = '$name' WHERE court_id = '$id'";
       if(mysql_query($sql_update))
       {
           
           echo 'COURT EDITED SUCCESSFULLY';
           echo '<br>';
           echo '<br>';
           echo '<A HREF = "admin.php">click here to return to home</A>';
       }
         else {
           die(mysql_error());
           }
}
else{
    echo 'Ensure All Fields are Filled';
     echo '<A HREF = "processeditcourt.php">BACK</A>';
}

