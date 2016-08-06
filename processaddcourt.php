<?php
require_once ('include/connection.php');
    require_once ('include/session.php');
    
$name = $_POST['name'];

if($name != "")
{
    $sel = "SELECT * FROM court WHERE courtroom = '$name' ";
    $res = mysql_query($sel);
    if(mysql_num_rows($res) > 0){
        echo 'Court Already Exists!!';
         echo '<br>';echo '<br>';
           echo '<A HREF = "addcourt.php">click here to add another court</A>';
            echo '<br>';
            echo '<br>';
             echo '<A HREF = "admin.php">Back to Admin Home</A>';
            echo '<br>';
    }else
    {    
    $sql_ins = "INSERT INTO court( courtroom) VALUES ('{$name}')";
       if(mysql_query($sql_ins))   
       { echo 'Court Added Successfully';
           echo '<br>';
           echo '<A HREF = "addcourt.php">click here to add another court</A>';
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

