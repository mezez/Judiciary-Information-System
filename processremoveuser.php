<?php
    require_once 'classes/UserClass.php';
    require_once 'include/connection.php';
    
    $id = $_GET['id'];
    $firstname = $_GET['id'];
    $lastname = $_GET['id'];
    $position = $_GET['id'];
    $username = $_GET['id'];
    $password = $_GET['id'];
    
    if(isset($id) and $id != "")
    {
        $removeuser = new UserClass($firstname, $lastname, $position, $username, $password);
        $removeuser->remove_user($id);
    }
    
 else {
        die("could not remove user") ;
        echo '<a href="admin.php">BACK TO ADMIN HOME</a>';
}
   

