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
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Fields</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bottom-cover">
    </div>
    <div class="fields-container">
        <div class="button-div">
            <form action="daterequest.php" method="POST">
                <h2>Enter a date:</h2>
                <input type="date" id="date" name="date">
                <input type="submit" value="Submit">
            </form> 
        </div>
    </div>


</body>
</html>