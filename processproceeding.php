<?php
require_once 'classes/CaseProceeding.php';
    
    $caseid = $_GET['caseid'];
    echo $caseid;
//    $charging= $_POST['charging'];
//    $plea= $_POST['plea'];
//    $calling1= $_POST['calling1'];
//    $exam1= $_POST['exam1'];
//    $calling2= $_POST['calling2'];
//    $exam2=$_POST['exam2'];
//    $submission= $_POST['submission'];
//    $adjournment= $_POST['adjournment'];
//    $interlocutory= $_POST['interlocutory'];
//    $judgement = $_POST['judgement'];
//    
//    
//    if(($caseid != "") and ($charging != "") and ($plea != "") and ( $calling1!= "") and ($exam1 != "") and ($calling2 != "") and ($exam2 != "") and ($submission != "") and ($adjournment != "") )
//   {
//    $fileproceeding = new CaseProceeding();
//    $fileproceeding->fileproceeding($caseid, $casetitle, $charging, $plea, $calling1, $exam1, $calling2, $exam2, $submission, $adjournment, $interlocutory, $judgement);
//   }
// else 
//   {
//   
//      
//           echo 'Filing of Proceeding Unsuccessful. Enusre to fill in necessary fields!!!';
//            echo '<br>';
//        
//            echo '<HTML>';
//            echo '<HEAD> <TITLE>Proceedings Flling Error </TITLE></HEAD>';
//            echo '<BODY>';
//            echo '<br>';
//            echo '<A HREF = "caseproceeding.php">Back </A>';
//            echo '</BODY>';
//            echo '</HTML>';
//       }

