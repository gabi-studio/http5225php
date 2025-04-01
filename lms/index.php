<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS</title>

  <!-- Bootstrap CDN CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<?php include('reusables/nav.php') ?>
<!-- container fluid means it will take up all the width -->
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5">All Schools</h1>
      </div>
    </div>
    <div class="row">
       

        <!-- Going to write a new php block to separate it from the rest -->
        <?php
          include('reusables/connection.php');
          // sql query
          // always check the database name from phpmyadmin
          $query = 'SELECT * FROM schools';

          // execute the query
          // two parameters: connection string and query
          // $connect and $query are the parameters
          $schools = mysqli_query($connect, $query);

          // usually we just use foreach to loop through the data
          // the first parameter is the data and the second parameter is the variable
          foreach($schools as $school){
            echo '<div class="col-md-3">
                    <div class="card mb-4" style="">
                      <div class="card-body">
                        <h5 class="card-title">' . $school['Board'] . '</h5>
                        <span class="badge bg-primary">' . $school['School Type'] .'</span>
                        <span class="badge bg-success">' . $school['Language'] .'</span>
                      </div>
                      <div class="card-footer">
                      <form action="updateschool.php" method="GET">
                        <input type="hidden" name="boardNo" value="' . $school['Board No'] .'">
                        <button type="submit" name="updateSchool" class="btn btn-sm btn-success">Edit</button>
                      </form>

                      <form action="deleteschool.php" method="GET">
                        <input type="hidden" name="boardNo" value="' . $school['Board No'] . '">
                        <button type="submit" name="deleteSchool" class=" btn btn-sm btn-danger">Delete</button>
                      </form>
                    </div>
                    </div>
                  </div>';
          }
          ?>

          

    </div>
  </div>
</div>



</body>
</html>