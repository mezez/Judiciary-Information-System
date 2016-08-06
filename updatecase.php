<?php

require_once 'include/functions.php'; 
require_once 'classes/CaseClass.php';

    $partyA = $_POST['complainants'];
    $partyB = $_POST['defendants'];
    $judge = $_POST['judge'];
    $partyAlawyer= $_POST['palwayer'];
    $partyBlawyer= $_POST['pblawyer'];
    $classification= $_POST['classification'];
    $courtroom= $_POST['court'];
    $date= $_POST['date'];
    $status= $_POST['status'];
    $casetitle= $_POST['casetitle'];
    $casedetails= $_POST['casedetails'];
    
    if(($partyA != "") and ($partyB != "")and ($judge != "") and ($partyAlawyer != "") and ( $partyBlawyer!= "") and ($classification != "") and ($casetitle != "") and ($courtroom != "") and ($date != "") and ($status != "") and ($casedetails != '') )
       {
            $updatecase = new CaseClass($partyA, $partyB, $judge, $partyAlawyer, $partyBlawyer, $sittingdate, $caseclassification, $courtroom, $status, $casedetails);
            $updatecase->updatecase($partyA, $partyB, $judge,$partyAlawyer, $partyBlawyer, $date, $classification,$courtroom,$status, $casedetails);
   }
   
 else {
        
         echo 'Case Update Not Successful!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Case Flling Error </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "displayupdatecase.php">Try Again</A>';
            echo '</BODY>';
            echo '</HTML>';
        }


