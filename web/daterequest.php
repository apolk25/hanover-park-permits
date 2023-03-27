<?php

include("library.php");

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
        
    <?php

    extract($_REQUEST);
    echo "<h1>Fields available on $date:</h1>";
    $conn = get_database_connection();

       
    $date = $conn->real_escape_string($date);


        

    $sql = "select area_name from areas, join applications on app_dates_requested <> $date, ";
    $conn->query($sql);
    echo $sql;

    ?>





</body>


</html>