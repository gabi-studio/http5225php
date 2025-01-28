<!-- if, else, elseif statements in PHP -->

<?php
    $hour = date('G'); // G = 24-hour format of an hour without leading zeros
    if ($hour < 12) {
        $greeting = "Good Morning!";

    } elseif ($hour < 18) {
        $greeting = "Good Afternoon!";
    } else {
        $greeting = "Good Evening!";
    }

    echo "<p>hour = $hour</p>";
    echo "<p>greeting = $greeting</p>";
?>


<!-- switch statements in php -->
<!-- if/else statements are more effective in covering bigger ranges of possibilities -->
<!-- switch statements are more effective in covering smaller ranges of possible values for a variable -->

<?php
$day = date('D');
switch ($day) {
    case "Mon";
        echo "Today is Monday.";
        break;
    case "Tue";
        echo "Today is Tuesday.";
        break;
    default:;
        echo "Today is another day.";
        break;
        }

?>


<!-- in class exercise: if.php -->
 <!-- source: https://github.com/codeadamca/php-if-switch/blob/main/if.php -->

<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        // use "rand(1,3)" to generate a random number between 1 and 3, inclusive
        // ceil is used to round up to the nearest whole number
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        

        // if the link name does not exist, output the URL as an h2 and a link
        // if the link name does exist, output the link name as an h2 and a link

        if ($linkName == '') {
            echo '<h2>'.$linkURL.'</h2>';
            echo '<a href="'.$linkURL.'">'.$linkURL.'</a>';
        } else {
            echo '<h2>'.$linkName.'</h2>';
            echo '<a href="'.$linkURL.'">'.$linkName.'</a>';
        }

        // link description
        echo '<p>'.$linkDescription.'</p>'; 

        // if the image exists, output that as an image tag, otherwise output the URL as an h2

        if ($linkImage == '') {
            echo '<h2>Image not found for: '.$linkURL.'</h2>';
        } else  {
            echo '<p><img src="'.$linkImage.'" alt="'.$linkImage.'" style="height: 100px;"></p>';
        }
            
            

        
        
        ?>

    </body>
</html>