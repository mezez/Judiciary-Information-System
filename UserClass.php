<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserClass
 *
 * @author mezez
 */
class UserClass {
    var $name;
    var $position;
    var $username;
    var $password;
    
    //constructor
    function __construct($name, $name, $position, $username, $password)
    {
        $this->name = $name;
        $this->position = $position;
        $this->username = $username;
        $this->password = $password;
    }
    
    //method adds a new user to system
    function add_user($name, $position, $username, $password)
    {
        $sql_ins = "INSERT INTO user( name, username, password, position) VALUES ('{$name}','{$username}','{$password}','{$position}')";
       if(mysql_query($sql_ins))
       {
           echo 'ADDING NEW USER SUCCESSFULLY DONE';
           echo '<br>';
           echo '<br>';
           echo 'USER DETAILS';
           echo '<br>';
           echo '<br>';
           echo "NAME:";
           echo $firstname. ' '. $lastname .' ';
           echo '<br>';
           echo '<br>';
           echo  'username: '.$username .' '.'password: '.$password.' '. 'position: '.$position;
       }
         else {
           die(mysql_error());
           }
    }
    
    //method edits an existing user in the system
    function edit_user ($name,  $position, $username, $password, $id)
    {
         $sql_update = "UPDATE user SET name = '$name', username = '$username', password = '$password', position = '$position' WHERE id = '$id'";
       if(mysql_query($sql_update))
       {
           
           echo 'EDITING USER SUCCESSFUL';
           echo '<br>';
           echo '<br>';
           echo 'UPDATED USER DETAILS';
           echo '<br>';
           echo '<br>';
           echo "NAME:";
           echo $name;
           echo '<br>';
           echo '<br>';
           echo  'username: '.$username .' '.'password: '.$password.' '. 'position: '.$position;
       }
         else {
           die(mysql_error());
           }
    }
    
    //method removes a user from the system 
    function remove_user ($id)
    {
         $sql_delete = "DELETE FROM USER WHERE id = '$id'";
         if(mysql_query($sql_delete))
       {
           
           echo 'THE SELECTED USER HAS BEEN REMOVED';
           echo '<br>';
           echo '<br>';
            echo '<a href="admin.php">BACK TO ADMIN HOME</a>';
       }
       else
       {
           die(mysql_error());
       }
    }
    
    function DisplayRelatedCases($name) {
        $sql_sel="SELECT id, casetitle, partyA, partyB FROM cases WHERE partyAlawyer = '$name' or partyBlawyer = '$name' or judge= '$name'";
        $result = mysql_query($sql_sel);
       
       
        
         while($retrieved_case = mysql_fetch_array($result))
          {
                echo $retrieved_case['id']."."." ". $retrieved_case['casetitle'];
                echo '<br>';
                echo '<A HREF = "viewauthrelatedcases.php?id='.$retrieved_case['id'].'">'.$retrieved_case['partyA']." VS ".$retrieved_case['partyB'].'</A>';
                echo '<br>';
                echo '<br>';
          }     
        
            
   }
        
 }
    
    
    

