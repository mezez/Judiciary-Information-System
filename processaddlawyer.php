<?php
require_once ('include/connection.php');
    require_once ('include/session.php');
    
$name = $_POST['name'];
$username = mysql_real_escape_string($_POST['uname']);
$phone = $_POST['phone'];

if($name != "" and $username!="" and $phone!= "" )
{
    $sel = "SELECT * FROM lawyer WHERE name = '$name' ";
    $res = mysql_query($sel);
    if(mysql_num_rows($res) > 0){
        echo 'Lawyer Already Exists!!';
         echo '<br>';echo '<br>';
           echo '<A HREF = "addlawyer.php">click here to add another lawyer</A>';
            echo '<br>';
            echo '<br>';
             echo '<A HREF = "admin.php">Back to Admin Home</A>';
            echo '<br>';
    }else
    {
    $sql_ins = "INSERT INTO lawyer( name, username, phone) VALUES ('{$name}','{$username}','{$phone}')";
       if(mysql_query($sql_ins))   
       { echo 'Lawyer Added Successfully';
           echo '<br>';
           echo '<A HREF = "addlawyer.php">click here to add another Lawyer</A>';
            echo '<br>';
            echo '<br>';
             echo '<A HREF = "admin.php">Back to Admin Home</A>';
            echo '<br>';
           }
           else{
               die(mysql_error());
           }
           
}
}

