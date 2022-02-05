<?php

  // Include database file
  include 'class/Database.php';

  $customerObj = new Employee();

  // Insert Record in customer table
  if(isset($_POST['submit'])) {
    $customerObj->insertData($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>School Board Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>School Board Test</h4>
</div><br> 

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insert Data</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="add.php" method="POST">
                    <div class="form-group">
                      <label for="name">Student Name:</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
                    </div>

                    <div class="form-group">
                      <label for="name">Board Name:</label>
                      <select name="board_name">
                          <option value="">Select Board</option>
                            <option value="CSM">CSM</option>
                            <option value="CSMB">CSMB</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="name">Grade 1:</label>
                      <input type="text" class="form-control" name="grade1" placeholder="Enter Grade" required="">
                    </div>

                    <div class="form-group">
                      <label for="name">Grade 2:</label>
                      <input type="text" class="form-control" name="grade2" placeholder="Enter Grade" required="">
                    </div>

                    <div class="form-group">
                      <label for="name">Grade 3:</label>
                      <input type="text" class="form-control" name="grade3" placeholder="Enter Grade" required="">
                    </div>

                    <div class="form-group">
                      <label for="name">Grade 4:</label>
                      <input type="text" class="form-control" name="grade4" placeholder="Enter Grade" required="">
                    </div>
                   
                    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>