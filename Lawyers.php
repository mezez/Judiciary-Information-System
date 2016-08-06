<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lawyers
 *
 * @author mezez
 */
class Lawyers {
    var $name;
   var $id;
   var $phone;


   //this method displays all the lawyers in the system
   function DisplayAllLawyers() {
       $sql_sel="SELECT * FROM lawyer";
      $result = mysql_query($sql_sel);
      
      if(isset($result))
      {
          while($retrieved_lawyer = mysql_fetch_array($result))
          {
                echo $retrieved_lawyer['id']." ".$retrieved_lawyer['name'];
                        echo '<br>';
                        echo '<A HREF = "lawyercase.php?id='.$retrieved_lawyer['id'].'">'."View Cases Under ".$retrieved_lawyer['name'].'</A>';
                        echo '<br>';
                        echo '<br>';
          }
      }    
   }
   
   //this method displays al cases related to a lawyer
   function DisplayRelatedCases($name){
       $sql_sel="SELECT id, casetitle, partyA, partyB FROM cases WHERE partyAlawyer = '$name' or partyBlawyer = '$name'";
        $result = mysql_query($sql_sel);
       
       
        
         while($retrieved_case = mysql_fetch_array($result))
          {
                echo $retrieved_case['id']."."." ". $retrieved_case['casetitle'];
                echo '<br>';
                echo '<A HREF = "lawyercasesec.php?id='.$retrieved_case['id'].'">'.$retrieved_case['partyA']." VS ".$retrieved_case['partyB'].'</A>';
                echo '<br>';
                echo '<br>';
          }     
        
            
   }
}
