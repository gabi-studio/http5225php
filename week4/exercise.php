<!-- Let’s use the JSONPlaceholder API, a fake online REST API for testing and prototyping. In this exercise, we'll fetch a list of users and display their information using a for loop.

1.	First, create a new PHP file, let's call it exercise.php.
2.	Use the following code to get user data from the JSONPlaceholder API and display it using a for loop:


// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();
-->

<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 Exercise - For loops</title>
</head>
<body>
    <h1>List of Users</h1>

    <?php
    for ($i = 0; $i < count($users); $i++) {
        echo "<p>Name: {$users[$i]['name']}</p>";
        echo "<p>Username: {$users[$i]['username']}</p>";
        echo "<p>Email: {$users[$i]['email']}</p>";
        echo "<p>City: {$users[$i]['address']['city']}</p>";
       
    }
    ?>
    
</body>
</html>