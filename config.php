<?php 
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DBNAME", "app");
    $conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die();
?>