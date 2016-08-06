<?php
    require_once 'include/connection.php';
    require_once 'classes/FeedBack.php';
    
    $uname = $_POST['uname'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    
     if(($title != "") and ($message != "") and ($uname != "") and ($phone != ""))
     {
         $sendfeedback = new FeedBack($title, $message, $uname, $phone);
          $sendfeedback->sendfeedback($title, $message, $uname, $phone);
 
     }
     
     else {
        
         echo 'Message Not Sent';
            echo '<br>';
             echo 'Try Again Later';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE>Message Sending Error </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "authorized.php">Back</A>';
            echo '</BODY>';
            echo '</HTML>';
        }

