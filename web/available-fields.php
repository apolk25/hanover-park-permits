<?php
    include('library.php');
    extract($_REQUEST);
    $conn = get_database_connection();
    $sql = "select area_name from areas, join applications on app_dates_requested <> $date";
    
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
    
</body>
</html>