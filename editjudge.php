<?php
require_once ('include/connection.php');
    require_once ('include/session.php');
    
$name = $_POST['name'];
$uname = $_POST['uname'];
$phone = $_POST['phone'];
$id = $_GET['id'];

if($name != "")
{
     $sql_update = "UPDATE judge SET name = '$name', username = '$uname', phone = '$phone' WHERE judge_id = '$id'";
       if(mysql_query($sql_update))
       {
           
           echo 'JUDGE EDITED SUCCESSFULLY';
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
     echo '<A HREF = "processeditjudge.php">BACK</A>';
}



