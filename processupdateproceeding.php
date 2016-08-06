<?php
require_once 'classes/CaseProceeding.php';

$caseid = $_GET['caseid'];
$casetitle = $_GET['casetitle'];
    $charging= $_POST['charging'];
    $plea= $_POST['plea'];
    $calling1= $_POST['calling1'];
    $exam1= $_POST['exam1'];
    $calling2= $_POST['calling2'];
    $exam2=$_POST['exam2'];
    $submission= $_POST['submission'];
    $adjournment= $_POST['adjournment'];
    $interlocutory= $_POST['interlocutory'];
    $judgement = $_POST['judgement'];
    
    
    if(($caseid != "") and ($charging != "") and ($plea != "") and ( $calling1 != "") and ($exam1 != "") and ($calling2 != "") and ($exam2 != "") and ($submission != "") and ($adjournment != "") )
   {
        $sql_sel="SELECT caseid FROM proceedings WHERE caseid = '$caseid'";
           $result = mysql_query($sql_sel);
           if(mysql_num_rows($result) == 0)
           {
               $fileproceeding = new CaseProceeding();
               $fileproceeding->fileproceeding($caseid, $casetitle, $charging, $plea, $calling1, $exam1, $calling2, $exam2, $submission, $adjournment, $interlocutory, $judgement);
           }  else {
               
               
       $update = new CaseProceeding();
       $update->updateproceeding($caseid, $charging, $plea, $calling1, $exam1, $calling2, $exam2, $submission, $adjournment, $interlocutory, $judgement);
           }
    }
 else {
          echo 'Filing/Updating of Case Proceeding Unsuccessful. Ensure to fill in inportant fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Case Proceedings Flling Error </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "updateproceeding.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
    }

