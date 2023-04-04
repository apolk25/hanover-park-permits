<?php
    include('library.php');
    extract($_REQUEST);
    $conn = get_database_connection();
    // $sql = "select area_name from areas, join applications on app_dates_requested <> $date, where area";
    // echo $sql
    // $result = $conn->query($sql);
    // $row = $result -> fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Fields</title>
</head>
<body>
    <form action="daterequest.php" method="POST">
        <label for="fname">Enter Date (YYYY-MM-DD): </label><br>
        <input type="date" id="date" name="date"><br>
        <input type="submit" value="Submit">
    </form> 

</body>
</html>