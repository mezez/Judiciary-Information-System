<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CaseClass
 *
 * @author mezez
 */
class CaseClass {
    var $partyA;
    var $partyB;
    var $judge;
    var $partyAlawyer;
    var $partyBlawyer;
    var $date;
    var $classification;
    var $courtroom;
    var $casedetails;
    var $status;
    var $id;
    var $casetitle;
    
    
    //constructor
    function construct($partyA, $partyB,$partyAlawyer, $partyBlawyer, $sittingdate, $caseclassification,$casetitle,$courtroom,$status, $casedetails) {
        $this->partyA = $partyA;
        $this->partyB = $partyB;
        $this->casetitle = $casetitle;
        $this->partyAlawyer = $partyAlawyer;
        $this->partyBlawyer = $partyBlawyer;
        $this->sittingdate = $sittingdate;
        $this->caseclassification = $caseclassification;
        $this->courtroom = $courtroom;
        $this->status = $status;
        $this->casedetails = $casedetails;
        
        
        
    }
    
    //filecase method
    function filecase($partyA, $partyB, $partyAlawyer, $partyBlawyer, $date, $classification,$casetitle,$courtroom,$status, $casedetails ) {
        $sql_ins = "INSERT INTO cases( partyA, partyB, partyAlawyer, partyBlawyer, date, classification,casetitle, courtroom, status, casedetails) VALUES ('{$partyA}','{$partyB}','{$partyAlawyer}','{$partyBlawyer}','{$date}','{$classification}','{$casetitle}','{$courtroom}','{$status}','{$casedetails}')";
       if(mysql_query($sql_ins))   
       {
           $sql_sel="SELECT court_id FROM court WHERE courtroom = '$courtroom'";
           $result = mysql_query($sql_sel);
           if(isset($result))
                {
                 $arrayone = mysql_fetch_array($result);
           
                   $court_id = $arrayone['court_id'];
                   
                    $sql_sel2="SELECT * FROM judgescourtroom WHERE court_id = '$court_id'";
                   $resulttwo = mysql_query($sql_sel2); 
                   $arraytwo = mysql_fetch_array($resulttwo);
                   $judge_id = $arraytwo['judge_id'];
                   
                   $sql_sel3="SELECT name FROM judge WHERE judge_id = '$judge_id'";
                   $resultthree = mysql_query($sql_sel3);

                   $arraythree = mysql_fetch_array($resultthree);

                   $name = $arraythree['name'];

                   $sql_sel4="SELECT id FROM cases WHERE judge = 'null'";
                   $resultfour = mysql_query($sql_sel4);

                   $arrayfour = mysql_fetch_array($resultfour);
                   $id = $arrayfour['id'];



                   $sql_update1 = "UPDATE cases SET judge = '$name' WHERE judge = 'null'"; 
                   mysql_query($sql_update1);

                     $sql_ins2 = "INSERT INTO casescourtroom( id, judge_id, courtroom_id) VALUES('{$id}','{$judge_id}','{$court_id}')";
                    mysql_query($sql_ins2);
                    }
                    else {die(mysql_error());}

               

       
          
            echo 'Case Filed Successfully';
           echo '<br>';
           echo '<A HREF = "filecase.php">click here to file another case</A>';
            echo '<br>';
           echo '<br>';
           echo '<A HREF = "admin.php">click here to return to Admin Home</A>';
        } 
            else {
                    die(mysql_error());
            }   
    }

    //update case method
    function updatecase($partyA, $partyB,$partyAlawyer, $partyBlawyer, $date, $classification,$courtroom, $status, $casedetails, $id) {
        
        $sql_update = "UPDATE cases SET partyA = '$partyA', partyB = '$partyB', partyAlawyer = '$partyAlawyer', partyBlawyer = '$partyBlawyer', date = '$date', classification = '$classification', courtroom = '$courtroom', status = '$status', casedetails = '$casedetails' WHERE id = '$id'";
       if(mysql_query($sql_update))
       {
           
           echo 'CASE UPDATE SUCCESSFUL';
            echo '<br>';
           
            echo '<br>';
           echo '<A HREF = "displayupdateproceeding.php">click here to Update proceedings for a case(If Available)</A>';
           echo '<br>';
            echo '<br>';
           echo '<br>';
            echo '<A HREF = "admin.php">click here to return to Admin Home</A>';
        }
        
        else 
            {
            die(mysql_error());
            }
        }
        
       //display case method
        function displayallcases() {
            $sql_sel="SELECT * FROM cases";
            $result = mysql_query($sql_sel);
      
                if(isset($result))
                {
                    while($retrieved_cases = mysql_fetch_array($result))
                    {
                        echo $retrieved_cases['id'].". ".$retrieved_cases['casetitle'];
                        echo '<br>';
                        echo "<A HREF = 'caseinfo.php?id=".$retrieved_cases['id']."'>".$retrieved_cases['partyA']." VS ". $retrieved_cases['partyB'].'</A>';
                        echo '<br>';
                        
                    }

                }else{
                                die(mysql_error());
                            }
        } 
        
        
        function DisplayRelatedCases($id){
       $sql_sel="SELECT id, casetitle, partyA, partyB FROM cases WHERE id = $id";
        $result = mysql_query($sql_sel);
        
         while($retrieved_case = mysql_fetch_array($result))
          {
                echo $retrieved_case['id']."."." ". $retrieved_case['casetitle'];
                echo '<br>';
                echo '<A HREF = "suitcasesec.php?id='.$retrieved_case['id'].'">'.$retrieved_case['partyA']." VS ".$retrieved_case['partyB'].'</A>';
                echo '<br>';
                echo '<br>';
          }
   }
   
   
   //delete case method
   function deletecase($id) {
        $sql_delete = "DELETE FROM cases WHERE id = '$id'";
         if(mysql_query($sql_delete))
       {
           
           echo 'THE SELECTED CASE HAS BEEN DELETED';
           echo '<br>';
           echo '<br>';
            echo '<a href="admin.php">BACK TO ADMIN HOME</a>';
       }
       else
       {
           die(mysql_error());
       }
   }
        
}
 