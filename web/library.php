<?php

function get_database_connection(){
        $servername = "localhost";
        $username = "root";
        $password = "Adampolk25!";
        $dbname = "permit";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }   

?>