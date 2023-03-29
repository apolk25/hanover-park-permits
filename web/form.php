<?php
        include('library.php');

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css?v=<?php echo rand(); ?>">
<script src="code.js"></script>


<div class="container-fluid">
    <!-- <h1 class="titleTicket">New Ticket</h1> -->
    <h2 class="credTicket">Hanover Parks & Recreation</h2>
    <h3 class="addTicket">665 Center Street</h3>
    <h3 class="addTicket">Hanover, MA 02339</h3>
</div>


<form action="insert.php" method="POST">
  <div class="conatiner-form">
    <div class="form-text">First Name Of Applicant</div>
    <input name="cus_first_name" >
    
    <div class="form-text">Last Name Of Applicant</div>
    <input name="cus_last_name" >

    <div class="form-text">Name Of Organization</div>
    <input name="org" >
    
    <div class="form-text">Mailing Address</div>
    <input name="address" >
    
    <div class="form-text">Phone</div>
    <input name="phone" >
    
    <div class="form-text">Email</div>
    <input name="email">

    <div class="form-text">Select a location</div>
    <select name="location" class="form-select" aria-label="Default select example">
      <?php
        $conn = get_database_connection();
        $sql = "select * from areas join locations on loc_id = area_loc_id";
        $result = $conn->query($sql);
        $count = 0;
        while($record = $result -> fetch_assoc())
        {
            echo '<option value="' . $count . '">';
            echo $record['loc_name'];
            echo " ";
            echo $record['area_name'];
            echo '</option>';
            $count++;
        }
        ?>
    </select>

    <div class="form-text">Dates Requested</div>
    <input name="dates_requested" type="date">
    
    <div class="form-text">Day(s) of Week</div>
    <input name="days_of_week">
   
    <div class="form-text">Entrance Time To Facility</div>
    <input name="entrance_time">
    
    <div class="form-text">Exit Time From Facility</div>
    <input name="exit_time">
    
    <div class="form-text">Time Activity Starts</div>
    <input name="activity_start_time">
    
    <div class="form-text">Time Activity ends</div>
    <input name="activity_end_time">
    
    <div class="form-text">Nature Of Activity</div>
    <input name="activity_nature">
    
    <div class="form-text">Estimated # of People Attending</div>
    <input name="num_people">
    
    <div class="form-text">Number Of Registrants</div>
    <input name="num_registrants">
    
    <div class="form-text">Number of Teams</div>
    <input name="num_teams">
    <br>
    
    <button id=save-button >Save</button> 
    <a href="index.php?content=list" class="btn btn-secondary" role="button">Cancel</a>

        
    </div>
    
    
    
    


    <!-- <button type="submit" class="btn btn-primary">Save</button>
    <a href="index.php?content=list" class="btn btn-secondary" role="button">Cancel</a> -->
</form>

