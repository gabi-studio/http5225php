<!-- use php to integrate database 
 php serverside language helps server generate html, css, js 
 and deliver to browser, client computer-->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP, SQL, MySQL</title>
 </head>
 <body>
    <h1>PHP, SQL, MySQL</h1>

    <?php
$connect = mysqli_connect (
'localhost',
'root',
'root',
'sandbox',
'3308'
);

$query = "SELECT * FROM colors";
$result = mysqli_query($connect, $query);

echo mysqli_num_rows($result);

// fetch_assoc() returns an associative array -- will fetch a row of data and return it as an associative array
while( $record = mysqli_fetch_assoc($result) ) {
    
    // pre tag saves whitespace, line breaks, tabs
    echo '<pre>';
    //display the array
    print_r($record);
    echo '</pre>';

    echo '<h2>' . $record['COL 2'] . '</h2>';
    echo '<div style="width: 300px; height: 40px; background-color: ' . $record['COL 2'] . '"></div>';
    

}

?>
 </body>
 </html>
