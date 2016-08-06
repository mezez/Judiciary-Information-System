<?php

    require_once 'include/connection.php';
    require_once 'classes/CaseClass.php';
    
    $partyA = $_POST['complainants'];
    $partyB = $_POST['defendants'];
    $partyAlawyer= $_POST['palawyer'];
    $partyBlawyer= $_POST['pblawyer'];
    $classification= $_POST['classification'];
    $courtroom= $_POST['court'];
    $date= $_POST['date'];
    $status= $_POST['status'];
    $casetitle= $_POST['casetitle'];
    $casedetails= $_POST['casedetails'];
    
    
    if(($partyA != "") and ($partyB != "") and ($partyAlawyer != "") and ( $partyBlawyer!= "") and ($classification != "") and ($casetitle != "") and ($courtroom != "") and ($date != "") and ($status != "") and ($casedetails != '') )
       {
            $freshcase = new CaseClass();
            $freshcase->construct($partyA, $partyB, $partyAlawyer, $partyBlawyer, $sittingdate, $caseclassification,$casetitle, $courtroom, $status, $casedetails);
            $freshcase->filecase($partyA, $partyB,$partyAlawyer, $partyBlawyer, $date, $classification,$casetitle,$courtroom,$status, $casedetails);
   }
 else {
        
         echo 'Filing of Case Unsuccessful. Enusre to fill in all fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Case Flling Error </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "filecase.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
        }
