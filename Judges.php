<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Judges
 *
 * @author mezez
 */
class Judges {
   var $name;
   var $id;
   var $phone;


   //this method displays all judges in the system
   function DisplayAllJudges() {
       $sql_sel="SELECT * FROM judge";
      $result = mysql_query($sql_sel);
      
      if(isset($result))
      {
          while($retrieved_judges = mysql_fetch_array($result))
          {
                echo $retrieved_judges['judge_id']." ".$retrieved_judges['name'];
                        echo '<br>';
                        echo '<A HREF = "judgecase.php?id='.$retrieved_judges['judge_id'].'">'."View Cases Under ".$retrieved_judges['name'].'</A>';
                        echo '<br>';
                        echo '<br>';
          }
      }    
   }
   
   //this method displays the cases related to a particular judge
   function DisplayRelatedCases($name){
       $sql_sel="SELECT id, casetitle, partyA, partyB FROM cases WHERE judge = '$name'";
        $result = mysql_query($sql_sel);
        
         while($retrieved_case = mysql_fetch_array($result))
          {
                echo $retrieved_case['id']."."." ". $retrieved_case['casetitle'];
                echo '<br>';
                echo '<A HREF = "judgecasesec.php?id='.$retrieved_case['id'].'">'.$retrieved_case['partyA']." VS ".$retrieved_case['partyB'].'</A>';
                echo '<br>';
                echo '<br>';
          }
   }
   
}
