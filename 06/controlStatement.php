<?php

// control Statement 
// 1. conditional statement
// 2. looping statement
// 3. branching statement


// 1. conditional statement
// if statement
// if else statement
// if else if statement
// switch statement
// ternary operator

// if else statement
$age = 20;
if ($age > 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}

// if else if statement
$age = 20;
if ($age < 18) {
    echo "You are not eligible to vote.";
} elseif ($age >= 18 && $age <= 60) {
    echo "You are eligible to vote.";
} else {
    echo "You are a senior citizen.";
}


// switch statement
$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day";
}


// ternary operator
$age = 20;
$eligibility = ($age >= 18) ? "Eligible to vote" : "Not eligible to vote";
echo $eligibility;



// 2. looping statement
// for loop
// while loop
// do while loop
// foreach loop


// for loop

for ($i=0; $i < 5; $i++) {
    echo "The number is: $i <br>";
}

// while loop
$i = 0;
while ($i < 5) {
    echo "The number is: $i <br>";
    $i++;
}

// do while loop
$i = 0;
do {
    echo "The number is: $i <br>";
    $i++;
} while ($i < 5);


// foreach loop
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $fruit) {
    echo "The fruit is: $fruit <br>";
}


// 3. branching statement  or jumping statement
// break statement
// continue statement

// break statement
for ($i=0; $i < 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo "The number is: $i <br>";
}

// continue statement
for ($i=0; $i < 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "The number is: $i <br>";
}




?>