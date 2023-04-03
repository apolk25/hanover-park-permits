<?php

extract($_REQUEST);

/*
 * Returns the content to be included based on the 'content' request parameter, if present.
 */
function get_content()
{
    global $content;

    if (!isset($content))
    {
        $content = 'list';
    }

    $content = 'ticket' . ucfirst(strtolower($content));

    return $content;
}


function get_database_connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "permit";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }   

?>