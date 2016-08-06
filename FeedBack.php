<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FeedBack
 *
 * @author mezez
 */
class FeedBack {
   var $title;
   var $message;
   var $phone;
   var $uname;

   //constructor
   function __construct($title, $message, $uname, $phone) {
       $this->title = $title;
       $this->message = $message;
       $this->phone = $phone;
       $this->uname = $uname;
   }
   
   //method is used to send a feedback
   function sendfeedback($title, $message, $uname, $phone) {
       $sql_ins = "INSERT INTO feedback( title, message, username, phone) VALUES ('{$title}','{$message}', '{$uname}','{$phone}')";
       if(mysql_query($sql_ins))
       {
           echo 'FEEDBACK SENT SUCCESSFULLY';
           echo '<br>';
           echo '<br>';
           echo '<a href="authorized.php">BACK TO AUTHORIZED HOME</a>';
       }
         else {
           die(mysql_error());
           }
   }
   
   //method is used to retrieve a feedbacks
   function showfeedback() {
       $count = 0;
       $sql_sel="SELECT user.firstname,user.lastname,user.phone,feedback.message FROM user LEFT JOIN feedback ON user.phone = feedback.phone";
        $result = mysql_query($sql_sel);
        
        if(mysql_num_rows($result)== 0)
        {
            echo 'NO MESSAGES FOUND';
            echo "<a href='feedbackdetails.php>ADMIN HOME</a>'";
        } 
        
         else {
    

                while($retrieved_msg = mysql_fetch_array($result))
                {
                    if($retrieved_msg[message] !== NULL)
                    {    
                        $count+= 1; 
                        echo '<a href="feedbackdetails.php?id='.$retrieved_msg['phone'].'">'.$count." ".$retrieved_msg[firstname]." ".$retrieved_msg[lastname].'</a>';
                        echo '<br>';
                    }
                         else {}
                }
         }
   }
   
   //this method views feedback details
   function RetrieveMsg($phone)
   {
       $sql_sel="SELECT * FROM  feedback where phone = '$phone' LIMIT 1";
        $result = mysql_query($sql_sel);
        while($retrieved_msg = mysql_fetch_array($result))
        {
            echo "<p><h4>".$retrieved_msg['username']."</h4></p>";
             echo "<p><h4>".$retrieved_msg['phone']."</h4></p>";
            echo '<br>';
            echo $retrieved_msg['message'];
        }
   }
   
   function DeleteMsg($phone)
   {
       $sql_del="DELETE FROM feedback WHERE phone = '$phone'";
       $result = mysql_query($sql_del);
       if($result == TRUE)
       {
           Header("Location: viewfeedback.php");
       }
       else
       {
           echo 'Error Deleting Message';
           echo "<a href='feedbackdetails.php>BACK</a>'";
       }
   }
}
