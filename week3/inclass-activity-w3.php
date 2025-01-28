<?php
// <!-- Challenge 1: Welcome to the Quirky Zoo Management System!
// You have been hired to manage the feeding schedule for various quirky animals in the zoo.
// Each animal has its unique feeding requirements based on the time of day. Your
// task is to write a PHP script that determines what each animal should eat
// based on the current time.-->


// • Each meal has specific food items:
// o Breakfast: "Bananas, Apples, and Oats"
// o Lunch: "Fish, Chicken, and Vegetables"
// o Dinner: "Steak, Carrots, and Broccoli"

$breakfast = array("Bananas", "Apples", "Oats");
$lunch = array("Fish", "Chicken", "Vegetables");
$dinner = array("Steak", "Carrots", "Broccoli");


// Here's the challenge:
// • If the time is between 5 AM and 9 AM, the animals should have breakfast.
// • If the time is between 12 PM and 2 PM, the animals should have lunch.
// • If the time is between 7 PM and 9 PM, the animals should have dinner.
// • If the time does not fall within any of the above intervals, the animals are not
// being fed.


// $hour = date('G');
$hour = ceil(rand(1, 24));
echo $hour;

if ($hour >= 5 && $hour <= 9) {
    echo '<p>Breakfast: ' . implode(', ', $breakfast).'</p>';
}
elseif ($hour >= 12 && $hour <= 2) {
    echo '<p>Lunch : ' . implode(', ', $lunch).'</p>';
} 
elseif ($hour >= 7 && $hour <= 9) {
    echo '<p>Dinner : ' . implode(', ', $lunch).'</p>';
} 
else {
    echo '<p>Animals are not being fed.</p>';

}


// You need to write a PHP script that outputs what the animals should eat
// based on the current time.






// ********************************************************************************************
// ********************************************************************************************





// Challenge 2: PHP Control Structures - The Magic Number Game
// Welcome to the Magic Number Game! Your task is to write a PHP script that
// determines the magic number based on a set of quirky rules. The user will
// input a number, and your script will follow these rules to determine the
// magic number:
// • If the number is divisible by 3, the magic number is "Fizz".
// • If the number is divisible by 5, the magic number is "Buzz".
// • If the number is divisible by both 3 and 5, the magic number is
// "FizzBuzz".
// • If the number is not divisible by either 3 or 5, the magic number is the
// number itself.
// Write a PHP script that takes an input number and prints the magic number
// according to these rules --> 

$magicNumber = ceil(rand(1, 100));
echo $magicNumber;

if ($magicNumber % 3 == 0 && $magicNumber % 5 == 0) {
    echo '<p>FizzBuzz</p>';
}
else if ($magicNumber % 5 == 0) {
    echo '<p>Buzz</p>';
}
else if ($magicNumber % 3 == 0) {
    echo '<p>Fizz</p>';
}
else {
    echo '<p>' . $magicNumber . '</p>';
}