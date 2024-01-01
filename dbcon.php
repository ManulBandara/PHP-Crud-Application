<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crud_operations");

    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if(!$conn){
        die("Connection faile");
    }
?>