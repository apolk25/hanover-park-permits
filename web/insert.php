<?php

include('library.php');

extract($_REQUEST);

$conn = get_database_connection();

// Sanitize all input values to prevent SQL injection exploits
$cus_first_name = $conn->real_escape_string($cus_first_name);
$cus_last_name = $conn->real_escape_string($cus_last_name);
$cus_org = $conn->real_escape_string($org);
$cus_phone = $conn->real_escape_string($phone);
$cus_email = $conn->real_escape_string($email);
$cus_address = $conn->real_escape_string($address);

$app_tier = $conn->real_escape_string($tier);
$app_time_enter = $conn->real_escape_string($entrance_time);
$app_time_exit = $conn->real_escape_string($exit_time);
$app_activity_start = $conn->real_escape_string($activity_start_time);
$app_activity_end = $conn->real_escape_string($activity_end_time);
$app_date = $conn->real_escape_string($dates_requested);
$app_people = $conn->real_escape_string($num_people);
$app_team = $conn->real_escape_string($num_teams);
$app_registrants = $conn->real_escape_string($num_registrants);

// echo $fieldIds[0];


// $area_name = $conn->real_escape_string($area_name);

// $loc_name = $conn->real_escape_string($loc_name);




// Build the INSERT statement
$cus_insert = <<<SQL
INSERT INTO customers (cus_first_name, cus_last_name, cus_organization, cus_phone,cus_email, cus_address)
       VALUES ('$cus_first_name', '$cus_last_name', '$cus_org', '$cus_phone', '$cus_email', '$cus_address')
SQL;




// -- INSERT INTO locations ( loc_name)
// --        VALUES ()

// -- INSERT INTO areas ( area_name)
// --        VALUES ()

// Execute the query and redirect to the list    
if ($conn->query($cus_insert) == TRUE)
{
    $last_id = $conn->insert_id;
    $app_insert = <<<SQL
       INSERT INTO applications ( app_cus_id, app_tier, app_date, app_people, app_teams, app_registrants)
              VALUES ($last_id, $app_tier, '$app_date', $app_people, $app_team, $app_registrants)
SQL;
echo $app_insert;
if ($conn->query($app_insert) == TRUE)
{
    $last_id = $conn->insert_id;
    $fieldIds = explode(",", $fieldIds);

    foreach ($fieldIds as &$id) 
    {
        $afl_insert = <<<SQL
        INSERT INTO afl ( afl_areas_id)
              VALUES ($id,$last_id)
        SQL;
    }

    header('Location: form.php');
    echo "<h1>Thank you for submitting your application</h1>";
}
else
{
    echo "Error inserting record: " . $conn->error;
}
}
else
{
    echo "Error inserting record: " . $conn->error;
}




$conn->close();


// save application, when someone saves a field