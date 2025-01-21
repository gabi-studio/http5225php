<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Week 2</title>
</head>
<body>
    <h1>PHP - Week 2</h1>
    
    <!-- this php tags tells the browswer that the code inside is php code -->
    <!-- mamp tells this to run server side -->


    <?php
    // php version as of 2025-01-21 is 8.3.1

    // echo is a function-that outputs text to the browser-
    // like document.write in javascript
    // echo vs print: echo can support multiple parameters, print can only support one
    // from here on, use echo
    // echo can output html tags
    // you can use single or double quotes to output text
    // be mindful that if you use single quotes, you can't use single quotes inside the string, similarly with double quotes inside double quotes
    // you can use escape characters to output quotes inside quotes

    echo "Hello World!";

    echo '<p>Hello World! inside single quotes.</p>';

    echo "<p>Hello World! inside double quotes.</p>";


    // in php, create variables by the $ sign before the variable name

    $text = "Hello World again! This string is stored in a variable and outputted using echo. ";
    $number = 100;
    $greeting = "Hello, ";
    $name = "Gabi";


    // output variables using echo, inside double quotes

    echo "<p>$text</p>";
    echo "<p>$number</p>";

    //
    // concatanate variables using the . operator
    //
    echo $greeting . $name . "!";


    //
    //arrays in php
    //

    // this is a technical array
    $languages = array('HTML', 'CSS', 'JavaScript', 'PHP', 'SQL', 'C#');

    // this more an object oriented array; name value pairs
    $person ['first'] = 'Gabi';
    $person ['last'] = 'C';
    $person ['email'] = 'gabi@humber.ca';

    echo "<p>$languages[0]</p>";

    echo $greeting . $person ['first'] . " " . $person ['last'] . "!";


    //
    //forms in php
    //
    $_POST = array("firstName" => "Gabi", "email" => "gabi@humber.ca");


    //
    //cookies in php
    //

    setcookie("name", "Gabi", time() + 86400, "/");

    echo $_COOKIE["name"];


    //
    //sessions in php
    //

    session_start();
    $_SESSION["username"] = "Gabi";




    

    // 
    // exercise: create a mailto link
    //

    //
    // excercise: converting html to php
    //

    echo "<h2>PHP and Creating Output</h2>";
  
    echo "<p>The PHP echo command can be used to create output.</p>";

    echo "<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>";
    
    echo
    "<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>";
    
    echo "<h2>More HTML to Convert</h2>";

    echo "<p>PHP says \"Hello World!\"</p>";

    echo "<p>Can you display a sentence with &apos; and &quot;?</p>";

    echo '<img src="php-logo.png">';

   
    ?>

    <!-- this way is better as you can get the image from the server -->
    <img src="<?php echo 'php-logo.png'; ?>" alt="PHP Logo"/>


    
    <!-- exercise: create a mailto link -->
    <a href="mailto:<?php echo $person['email'] ?>"> Mail Gabi</a>
    

</body>
</html>
