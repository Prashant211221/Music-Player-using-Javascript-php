<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "music_player";
        $conn = mysqli_connect($server, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
?>