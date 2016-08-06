<?php

$id = $_GET['id'];


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

    
    
    if(($partyA != "") and ($partyB != "") and ($partyAlawyer != "") and ( $partyBlawyer!= "") and ($classification != "") and ($casetitle != "") and ($courtroom != "") and ($date != "") and ($status != "") and ($casedetails != "") )
       {
            $updatecase = new CaseClass();
            $updatecase->updatecase($partyA, $partyB,$partyAlawyer, $partyBlawyer, $date, $classification,$casetitle,$courtroom, $status, $casedetails, $id);
   }

 else {
        
         echo 'Updating of Case Unsuccessful. Ensure to fill in all fields!!!';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Case Flling Error </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "updatecase.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
        }


