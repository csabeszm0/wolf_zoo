<?php
    function dbcon()
    {
        $host="localhost";
        $user="root";
        $pass="";
        $db="";
        global $con;

    $con=mysqli_connect($host,$user,$pass,$db) or die("Hiba kapcsolódáskor!");
    $con -> set_charset("utf8");
    return $con;

    }
?>