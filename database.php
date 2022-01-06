<?php

    // $servername = "localhost";
    // $username = "b031910250";
    // $password = "5599";
    // $dbname = "student_b031910250";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_b031920032";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully";

?>