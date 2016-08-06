<?php

session_start();
$name = $_SESSION['name'];
// The session_unset() function unregisters a session variable.
session_unset();
session_destroy();

echo 'YOU ARE SUCCESSFULLY LOGGED OUT';

?>

<HTML>
<HEAD> <TITLE> LOG OUT </TITLE></HEAD>
<BODY>
<br>
<A HREF = "index.php">Back To Home</A>
</BODY>
</HTML>

