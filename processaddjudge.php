<?php
require_once ('include/connection.php');
    require_once ('include/session.php');
    
$name = $_POST['name'];
$username = mysql_real_escape_string($_POST['uname']);
$phone = $_POST['phone'];

if($name != "" and $username!="" and $phone!= "" )
{
    $sel = "SELECT * FROM judge WHERE name = '$name' ";
    $res = mysql_query($sel);
    if(mysql_num_rows($res) > 0){
        echo 'Judge Already Exists!!';
         echo '<br>';echo '<br>';
           echo '<A HREF = "addjudge.php">click here to add another judge</A>';
            echo '<br>';
            echo '<br>';
             echo '<A HREF = "admin.php">Back to Admin Home</A>';
            echo '<br>';
    }else
    {
    $sql_ins = "INSERT INTO judge( name, username, phone) VALUES ('{$name}','{$username}','{$phone}')";
       if(mysql_query($sql_ins))   
       {
           $sql_sel="SELECT judge_id FROM judge WHERE name = '$name'";
           $result = mysql_query($sql_sel);
           $retr = mysql_fetch_array($result);
           $judge_id = $retr['judge_id'] ;
           
           $sql_sel2="SELECT * FROM court WHERE court_id = '$judge_id'";
           $result2 = mysql_query($sql_sel2);
           if(mysql_numrows($result2) != 0){
           $retr2 = mysql_fetch_array($result2);
           $court_id = $retr2['court_id'] ;
           
           $sql_ins2 = "INSERT INTO judgescourtroom( judge_id, court_id)VALUES ('{$judge_id}','$court_id')";
           if(mysql_query($sql_ins2)){
               echo 'Judge Added Successfully';
           echo '<br>';
           echo '<A HREF = "addjudge.php">click here to add another Judge</A>';
            echo '<br>';
            echo '<br>';
             echo '<A HREF = "admin.php">Back to Admin Home</A>';
            echo '<br>';
           }
           else{
               die(mysql_error());
           }
           
           }
           else{
               //delete the just added judge
                $sql_delete = "DELETE FROM judge WHERE name = '$name'";
                mysql_query($sql_delete);
               die();
               echo 'There Are No Available Courtrooms For The New Judge';
               echo '<br>';echo '<br>';
               echo 'Add More Court Rooms Then Add Judge';
               echo '<br>'; echo '<br>';
             echo '<A HREF = "admin.php">Back to Admin Home</A>';
            echo '<br>';
              
           }
           
           
       }
       else{
               die(mysql_error());
           }
}
}

