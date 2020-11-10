<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'qlbanhang';
    $con = new mysqli($host,$user,$pass,$database);
    if($con ->connect_error){
        die('connect faild : '. $con->connect_error);
    }

?>