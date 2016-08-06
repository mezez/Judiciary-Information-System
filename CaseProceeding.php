<?php
require_once 'include/connection.php';

class CaseProceeding
{
    
    var $caseid;
    
    
    //file proceeding method
    function fileproceeding($caseid,$casetitle, $charging, $plea, $calling1, $exam1,$calling2, $exam2, $submission, $adjournment,$interlocutory, $judgement) {  
         $sql_sel="SELECT casetitle FROM cases WHERE id = '$caseid'";
           $result = mysql_query($sql_sel);
           if(isset($result))
            {
               $retrieved_cases = mysql_fetch_array($result);
               $casetitle = $retrieved_cases['casetitle'];
               
               $sql_ins = "INSERT INTO proceedings( caseid,casetitle, charging, plea, calling1, exam1,calling2, exam2, submission, adjournment,interlocutory, judgement) VALUES('{$caseid}','{$casetitle}','{$charging}','{$plea}' ,'{$calling1}' ,'{$exam1}' ,'{$calling2}' ,'{$exam2}' ,'{$submission}' ,'{$adjournment}' ,'{$interlocutory}' ,'{$judgement}' )";
                   if( mysql_query($sql_ins))
                   {
                        echo 'Proceedings Filed Successfully';
                        echo '<br>';
                        echo '<A HREF = "admin.php">Back To Admin Home</A>';
                        echo '<br>';
                   }
                   else {die(mysql_error());}
             }
                    else {die(mysql_error());}
    }  
    
    //proceedings related to a particular case method
    function GetRelatedProceeding($caseid) {
        
        
        $sql_sel="SELECT * FROM proceedings WHERE caseid = '$caseid'";
           $result = mysql_query($sql_sel);
           if(isset($result))
            {
               $retrieved_proceeding = mysql_fetch_array($result);
               return $retrieved_proceeding;
            
            }
            else{
                die(mysql_error());
            }
               


}
    //update proceeding method
    function updateproceeding($caseid, $charging, $plea, $calling1, $exam1,$calling2, $exam2, $submission, $adjournment,$interlocutory, $judgement) {
        $sql_update = "UPDATE proceedings SET  charging = '$charging', plea = '$plea', calling1 = 'calling1', exam1 = '$exam1', calling2 = '$calling2', exam2 = '$exam2', submission = '$submission', adjournment = '$adjournment',interlocutory = '$interlocutory', judgement = '$judgement' WHERE caseid = '$caseid'";
         if(mysql_query($sql_update))
       {
           
           echo 'PROCEEDINGS UPDATE SUCCESSFUL';
            echo '<br>';
           echo '<A HREF = "caseproceeding.php">click here update another proceedings(If Available)</A>';
           echo '<br>';
           echo '<br>';
           
            echo '<A HREF = "admin.php">click here to return to Admin Home</A>';
        }
        
        else{
            die(mysql_error());
        }
        
    }

}





