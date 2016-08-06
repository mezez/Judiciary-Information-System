<?php
$suitno = $_POST['suitno'];

 if($suitno != "" )
        {
            $sql_sel="SELECT * FROM cases where id = $suitno";
        
            $result = mysql_query($sql_sel);
            if(mysql_num_rows($result)=== 0)
            {
                echo 'No Matches found';
                echo '<br>';
                 echo '<HTML>';
                 echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
                 echo '<BODY>';
                 echo '<br>';
                 echo '<A HREF = "suitnumber.php">Back</A>';
                 echo '</BODY>';
                 echo '</HTML>';
            }
                        
            else{
                header("Location: suitcase.php?suitno=$suitno");
            }
        }
        
 else {
                 echo '<HTML>';
                 echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
                 echo '<BODY>';
                 echo 'Please ensure that you have entered a valid suit number!!!';
                 echo '<br>';
                 echo '<A HREF = "suitnumber.php">Back</A>';
                 echo '</BODY>';
                 echo '</HTML>';
      }       
                
?>