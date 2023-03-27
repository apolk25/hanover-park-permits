<?php

/*************************************************************************************************
 * update.php
 *
 * Page to update (save) an existing ticket. This page expects the following request paramaters to
 * be set:
 *
 * - id
 * - problem
 * - priority
 * - contactEmail
 * - resolution
 * - status
 *************************************************************************************************/

include('library.php');

$conn = get_database_connection();

// Sanitize all input values to prevent SQL injection exploits
$problem = $conn->real_escape_string($problem);
$contactEmail = $conn->real_escape_string($contactEmail);
$resolution = $conn->real_escape_string($resolution);
$status = $conn->real_escape_string($status);

// Build the UPDATE statement
$sql = <<<SQL
UPDATE applications
   SET tkt_problem = '$problem',

 WHERE tkt_id = $id
SQL;

// Execute the query and redirect to the list
if ($conn->query($sql) == TRUE)
{
    header('Location: index.php?content=list');
}
else
{
    echo $sql;
    echo 'Error inserting record: ' . $conn->error;
}

$conn->close();