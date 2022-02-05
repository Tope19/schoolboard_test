<?php
  
  // Include database file
  include 'class/Database.php';

  $studentObj = new Employee();

  // Edit student record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $student = $studentObj->displyaRecordById($editId);
  }

  // Update Record in student table
  if(isset($_POST['update'])) {
    $studentObj->updateRecord($_POST);
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
                <div class="card-header bg-primary">
                    <h4 class="text-white">Update Records</h4>
                </div>
                <div class="card-body bg-light">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" value="<?php echo $student['name']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="name">Board Name:</label>
                      <input type="text" class="form-control" value="<?php echo $student['board_name']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="name">Grade 1:</label>
                      <input type="text" class="form-control" value="<?php echo $student['grade1']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="name">Grade 2:</label>
                      <input type="text" class="form-control" value="<?php echo $student['grade2']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="name">Grade 3:</label>
                      <input type="text" class="form-control" value="<?php echo $student['grade3']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="name">Grade 4:</label>
                      <input type="text" class="form-control" value="<?php echo $student['grade4']; ?>" required="">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>