<?php
    error_reporting(0);
    ini_set('display_errors', 0);

    $servername = "localhost";
    $username = $_GET["user"];
    $password = $_GET["pass"];
    $dbname = "$249391552_0000017";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed");
    }
    $flow = $_GET["flow"];
    $date_now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO dane(flow, dateTime) VALUES('$flow', '$date_now')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error": " . $sql . "<br>" . $conn->error;"
    }

    $conn->close();
?>