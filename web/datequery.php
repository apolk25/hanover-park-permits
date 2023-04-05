<?php
    include('library.php');
    extract($_REQUEST);
    $conn = get_database_connection();
    $app_date = $conn->real_escape_string($app_date);
    echo "<h1>";
    echo $app_date;
    echo "</h1>";
    $query = <<<SQL
        SELECT Areas.*
        FROM Areas
        -- join Locations on loc_id = area_loc_id
        Left Outer JOIN AFL ON area_id = afl_areas_id
        Left outer JOIN applications ON app_id = afl_app_id   
        And app_date = '$app_date'
        Where app_date is null;
    SQL;

    $result = $conn->query($query);
    while($record = $result -> fetch_assoc()){

        echo "<h6>";
        // echo $record['loc_name'];
        echo $record['area_name'];
        echo "</h6>";
    }
?>