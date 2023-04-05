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

function validate($date,$field)
{
    // select *
    // from afl 
    // join applications on app_id = afl_app_id
    // join areas on areas_id = afl_areas_id
    // where app_date = $date
    // and afl_areas_id = $field

    // me and leyton only partially did the statement but this was our idea.

    return false;
}

function get_database_connection(){
        $servername = "localhost";
        $username = "root";
        $password = "Password1234";
        $dbname = "permit";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }   

?>