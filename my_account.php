<?php
    session_start();
   	echo "<p style='margin-top:10%;'>";
    echo "<center><h1>"."welcome"." ".$_SESSION['user_name']."</h1>";
    echo "<h2><a href='logout.php'>click here to logout</a></h2></center>";
    echo "</p>";

?>