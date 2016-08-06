 <?php
   require_once ('include/connection.php');
    require_once ('include/session.php');
    
    $username1 = mysql_real_escape_string($_POST['username']);
    $password1 = $_POST['password'];
    
        if($username1 != "" and $password1!= "" )
        {$sql_sel="SELECT * FROM user";

        $result = mysql_query($sql_sel);
        if(isset($result))
        {            
            
            while ($found_user = mysql_fetch_array($result)) 
            {
                if( $found_user['username']== $username1 && $found_user['password']== $password1 && $found_user['position']== 'admin')
                {
                    $_SESSION['id']= $found_user['id'];
                     $_SESSION['name']= $found_user['username'];
            
                    Header("Location: admin.php");
                }
                else if ( $found_user['username']== $username1 && $found_user['password']== $password1 && $found_user['position']== 'authorized')
                {
                     $_SESSION['id']= $found_user['id'];
                     $_SESSION['name']= $found_user['username'];
                     $_SESSION['rname']=$found_user['name'];
            
                    Header("Location: authorized.php");
                }
            else {
                $errmsg = "Could not Login";
            }
                 
                
            }
            
        }
       
            if(isset($errmsg))
            {
                echo 'Incorrect Login details, Ensure to enter correct username and/or password';
                echo '<br>';
        
                 echo '<HTML>';
                 echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
                 echo '<BODY>';
                 echo '<br>';
                 echo '<A HREF = "index.php">Click to Log In Again</A>';
                 echo '</BODY>';
                 echo '</HTML>';
            }
        }
        
        else 
            {
            echo 'Error Logging In, Ensure to enter all fields';
            echo '<br>';
        
            echo '<HTML>';
            echo '<HEAD> <TITLE> LOGIN </TITLE></HEAD>';
            echo '<BODY>';
            echo '<br>';
            echo '<A HREF = "index.php">Click to Log In Again</A>';
            echo '</BODY>';
            echo '</HTML>';
            }
        
        
    
    
    

    
     ?>


