<?php
// if is set is used to check if the button is clicked
// in php, the way to get post and get data is using the $_POST and $_GET 

if(isset($_POST['addSchool'])){
  // if(isset(the type of request['what you're checking for])){
  // print_r($_POST); -- commented out; used for debugging
  // Array ( [boardname] => Humber [language] => English [schooltype] => College [addSchool] => )
  
  // we are getting the data from the form 
  // we are saving the data in local variables
  // it is a good practice to use local variables to store the data
  // and then use the local variables in the query
  $boardname = $_POST['boardname'];
  $language = $_POST['language'];
  $schooltype = $_POST['schooltype'];

  include('reusables/connection.php');
  // now we are going to write the query

  // you always make sure that the number of columns matches the number of values

  $query = "INSERT INTO schools (`Board`, `Language`, `School Type`) VALUES 
  ('$boardname', '$language', '$schooltype')";

  // we are going to run the query
  $school = mysqli_query($connect, $query);

  if($school){
    echo 'School added successfully';
  }
  else {
    echo 'Unable to add the school. Error code: ' . mysqli_error();
  }

  // if the query is successful, we will get a message that the school is added successfully
  // at this point we will check our database to see if the data is added
  // we will go to phpmyadmin and check the database

}

// whenever you're writing CRUD
// you need an identifier 
// the identifier is the primary key
// the primary key is the unique identifier for the data



?>

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
  <!-- // we are including the nav.php file here   -->
  <?php include('reusables/nav.php') ?>
<!-- 
  // this is a container class from bootstrap -->
  <div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-5">Add a School</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <!-- // we are using the get method here because we are not sending any sensitive data
        // general rule of thumb is to use post method for sensitive data -->
        <form method ="POST" action="addschool.php" > 
          <!-- ^ if you want to do a refresh, do action "/"
            -->
        
        <!-- // we have two ways to send data to the server
        // 1. using the form tag
        // 2. using the ajax method
        // we are using the form tag here

        
            // we need the name attribute to get the data from the form
            // get and post requests do not use the id attribute -->
            <div class="mb-3">
                <label for="boardname" class="form-label">Board Name</label>
                <input type="text" class="form-control" name="boardname" id="boardname" aria-describedby="boardname">
            </div>
            <!-- the name attribute is VERY important
             anything you pass here is important
             no spaces, no special characters
             -- keep everything consistent
             -- for example: name is the same as column name, variable name, etc.
             -- have a standard naming convention -->

            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" name="language" id="language" aria-describedby="language">
            </div>

            <div class="mb-3">
                <label for="schooltype" class="form-label">School Type</label>
                <input type="text" class="form-control" name="schooltype" id="schooltype" aria-describedby="schooltype">
            </div>
            
            <button type="submit" class="btn btn-primary" name ="addSchool">Submit</button>
      </form>
        </div>
    </div>
  </div>

</body>
</html>