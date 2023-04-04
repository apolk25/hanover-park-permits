<?php

include('library.php');
/*************************************************************************************************
 * ticketDetail.php
 *
 * Content page to display the detail form for a single ticket. This page is expected to be
 * contained within index.php.
 *************************************************************************************************/


    $conn = get_database_connection();

    $date = $conn->real_escape_string($app_date);


    $sqlreq =<<<SQL
    SELECT fields.*
    FROM fields
    Left Outer JOIN AFL ON app_id = afl_app_id
    left outer JOIN Areas ON area_id = afl_areas_id
    SQL;

    $sql = "select area_name from areas, join applications on app_dates_requested <> $date, ";
    $result = $conn->query($sqlreq);
    echo $sql;
    $row = $result->fetch_assoc();

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>


<h2>Details for Ticket #<?php echo $row['area_name']; ?></h2>

<form method="POST">
    <input onchange="getFeilds(this.value)" type="date" value=""/>
</form>
