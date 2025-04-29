



<?php


// echo "Hello, BIT Students!", " <h1>We learned php wiht xampp technology </h1>";

// print_r("hello print_r");
// echo "<br>";

// var_dump("hello vardump");

// variable  

// use $ sign
// alphanumeric + underscore
// letter or underscore at the beginning
// case sensitive


$score = 80;


// data types

//1. scalar data types  --> hold single value
// boolean 
// integer
// float
// string

//2. compound data types --> hold multiple values
// array
// object

// 3. special data types --> hold special values
// null;
// resource

$_name = "BIT Students";
// var_dump($_name);


$file = fopen("test.txt", "r");
// var_dump($file);


// method of print 
// echo "<h1>hello world</h1>";   //accepts multiple parameters, 
// print("hello world print"); // accepts single parameter, returns 1
// print_r("hello world print_r");  
// var_dump("hello world var_dump");


$nums = array(1,2,3,4,5,6,7,8,9,10);
// print_r($nums);
// var_dump($nums);


// scope
// local scope
// global scope
// static scope


// constant 
// const PI = 3.14;   // use const keyword to define constant

const MONGO_URI = "mongodb://localhost:27017"; 

function test() {
    define("PI", 3.14); // use define function to define constant
}


// .env 
// inside .env file we use conststant 















// operator 
// symbol that performs operations on variables and values

// 1. arithmetic operator
// +, -, *, /, %, ** (exponentiation)
// 2. assignment operator
// =, +=, -=, *=, /=, %=, 
// 3. comparison operator
// ==, ===, !=, <>,  !==, >, <, >=, <=, <=> (spaceship operator)
// 4. logical operator
// &&, ||, !, and, or, 
// 5. bitwise operator
// &, |, ^, ~, <<, >>
// 6. string operator
// ., .= (string concatenation)

// 7. increment and decrement operator
// ++, -- (prefix and postfix)

$y--;
$z--;


$r = 10;


echo $r++; 

echo ++$r;








// $a <=> $b; // returns -1, 0, 1 if $a is less than, equal to, or greater than $b respectively.




// string operator 
// . (string concatenation)
// .= (string concatenation) 


$name1 = "jiya";
$name2 = "khan";

$name3 = $name1 ." ". $name2;
echo $name3; 




["ram", "shyam", "mohan"];   // numeric array   or indexed array
["name" => "ram", "age" => 20]; // associative array





[
    [], 
    []
]

// array()







?>