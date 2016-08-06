<?php
    
    $phone = $_GET['phone'];
    $delete = new FeedBack();
    $delete->DeleteMsg($phone);
            
?>

