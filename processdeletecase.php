<?php
    require_once 'classes/UserClass.php';
    require_once 'include/connection.php';
    
    $id = $_GET['id'];
    
    
    if(isset($id) and $id != "")
    {
        $deletecase = new CaseClass();
        $deletecase->deletecase($id);
    }
    
 else {
        die("could not delete case") ;
        echo '<a href="admin.php">BACK TO ADMIN HOME</a>';
}

