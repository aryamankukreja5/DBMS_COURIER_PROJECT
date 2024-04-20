<?php

    $dbcon = mysqli_connect('localhost','root','','courierdb.sql');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>