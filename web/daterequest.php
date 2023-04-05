<?php

include('library.php');
/*************************************************************************************************
 * ticketDetail.php
 *
 * Content page to display the detail form for a single ticket. This page is expected to be
 * contained within index.php.
 *************************************************************************************************/


    // $conn = get_database_connection();

    // $date = $conn->real_escape_string($app_date);


    
    // $row = $result->fetch_assoc();

?>

<script>
    function getFields(date) {
        location.href = 'datequery.php?app_date=' + date;
    }
</script>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <input id="date" onchange="getFields(this.value)" type="date"/>
</form>


<!-- <p>"Hi <?php echo $result?> </p> -->