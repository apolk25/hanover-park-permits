<?php

include('library.php');

extract($_REQUEST);

$conn = get_database_connection();

// Sanitize all input values to prevent SQL injection exploits
$cus_first_name = $conn->real_escape_string($cus_first_name);
$cus_last_name = $conn->real_escape_string($cus_last_name);
$cus_org = $conn->real_escape_string($cus_org);
$cus_phone = $conn->real_escape_string($cus_phone);
$cus_email = $conn->real_escape_string($cus_email);
$cus_address = $conn->real_escape_string($cus_address);

$app_tier = $conn->real_escape_string($app_tier);
$app_time_enter = $conn->real_escape_string($app_time_enter);
$app_time_exit = $conn->real_escape_string($app_time_exit);
$app_activity_start = $conn->real_escape_string($app_activity_start);
$app_activity_end = $conn->real_escape_string($app_activity_end);
$app_date = $conn->real_escape_string($app_date);
$app_people = $conn->real_escape_string($app_people);
$app_team = $conn->real_escape_string($app_team);
$app_registrants = $conn->real_escape_string($app_registrants);

$area_name = $conn->real_escape_string($area_name);

$loc_name = $conn->real_escape_string($loc_name);




// Build the INSERT statement
$sql = <<<SQL
INSERT INTO customers (cus_first_name, cus_last_name, cus_org, cus_phone,cus_email, cus_address)
       VALUES ($cus_first_name, $cus_last_name, $cus_org, cus_phone,cus_email, cus_address)

INSERT INTO applications ( app_tier, app_time_enter, app_time_exit, $app_activity_start, app_activity_end, app_date, app_people, app_team, app_registrants)
       VALUES ('{$problem}', $priority, '{$contactEmail}')

INSERT INTO locations ( loc_name)
       VALUES ('{$problem}', $priority, '{$contactEmail}')

INSERT INTO areas ( area_name)
       VALUES ('{$problem}', $priority, '{$contactEmail}')
SQL;

// Execute the query and redirect to the list
if ($conn->query($sql) == TRUE)
{
    header('Location: index.php?content=list');
}
else
{
    echo "Error inserting record: " . $conn->error;
}

$conn->close();
// comment