<?php

    $conn= mysqli_connect('localhost', 'test','test','loginegistration') or die ( "Database Not Connected!..");

    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>