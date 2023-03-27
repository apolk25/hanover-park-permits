<?php

/*************************************************************************************************
 * ticketNew.php
 *
 * Content page to display an entry form for a new ticket. This page is expected to be contained
 * within index.php.
 *************************************************************************************************/

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css?v=<?php echo rand(); ?>">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hanover Sports</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <!-- <h1 class="titleTicket">New Ticket</h1> -->
    <h2 class="credTicket">Hanover Parks & Recreation</h2>
    <h3 class="addTicket">665 Center Street</h3>
    <h3 class="addTicket">Hanover, MA 02339</h3>
</div>




<form action="insert.php" method="POST">
    <div class="conatiner-form">
        <input name="name" >
        <div class="form-text">Name Of Applicant</div>

        <input name="org" >
        <div class="form-text">Name Of Organization</div>

        <input name="address" >
        <div class="form-text">Mailing Address</div>

        <input name="phone" >
        <div class="form-text">Phone</div>

        <input name="email" >
        <div class="form-text">Email</div>

        <input name="tier" >
        <div class="form-text">Tier</div>

        <select name="fields_requested" class="form-select" aria-label="Default select example">
            <option selected>Fields Requested</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <input name="dates_requested">
        <div class="form-text">Dates Requested</div>

        <input name="days_of_week">
        <div class="form-text">Day(s) of Week</div>

        <input name="entrance_time">
        <div class="form-text">Entrance Time To Facility</div>

        <input name="exit_time">
        <div class="form-text">Exit Time From Facility</div>

        <input name="activity_start_time">
        <div class="form-text">Time Activity Starts</div>

        <input name="activity_end_time">
        <div class="form-text">Time Activity ends</div>

        <input name="activity_nature">
        <div class="form-text">Nature Of Activity</div>

        <input name="num_people">
        <div class="form-text">Estimated # of People Attending</div>

        <input name="num_registrants">
        <div class="form-text">Number Of Registrants</div>

        <input name="num_teams">
        <div class="form-text">Number of Teams</div>


        
    </div>
    
    
    <!-- <div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Password</label>
    </div>
    <div class="col-auto">
        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
        <span id="passwordHelpInline" class="form-text">
        Must be 8-20 characters long.
        </span>
    </div>
    </div> -->
    


    <!-- <button type="submit" class="btn btn-primary">Save</button>
    <a href="index.php?content=list" class="btn btn-secondary" role="button">Cancel</a> -->
</form>