<?php


class Court {
    var $courtname;
    var $case;
    var $judge;
    
        //constructor
        function __construct($courtname) {
        $this->courtname = $courtname;
    }
    
    //method gets cases related to a particuler court
    function getrelatedcases($courtname) {
        
        $sql_sel="SELECT id, casetitle, partyA, partyB FROM cases WHERE courtroom = '$courtname'";
            $result = mysql_query($sql_sel);
      
                if(isset($result))
                {
                    while($retrieved_cases = mysql_fetch_array($result))
                    {
                        echo $retrieved_cases['id'].". ".$retrieved_cases['casetitle'];
                        echo '<br>';
                        echo '<A HREF = "caseinfo.php?id='.$retrieved_cases['id'].'">'.$retrieved_cases['partyA']." VS ". $retrieved_cases['partyB'].'</A>';
                        echo '<br>';
                        
                    }

                }
                else {die(mysql_error());}
        } 
        
 

    //method gets all courts in the system
    function GetAllCourts() {
    
     $sql_sel="SELECT * FROM court";
      $result = mysql_query($sql_sel);
      
      if(isset($result))
      {
          while($retrieved_court = mysql_fetch_array($result))
          {
              echo"<option>". $retrieved_court['courtroom']."</option>";
             
          }
          
      }
}
}
