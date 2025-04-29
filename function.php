<?php

/**
 * syntax:
 * function functontion_name($parameter1, $parameter2) {
 *     // function body
 * }
 */

 // function declaration
 // function calling
 // function parameter
 // function argument
 // function return value
// function recursion
// function default parameter
// function variable scope
// function variable length argument
// function anonymous function
// function closure
// function callback


//  function greeting($name, $name2 = "BIM") {    // default parameter
//     echo "Hello, $name! and $name2!<br>";
//  }

//  greeting("BIT Students", "BIM Students");  // passing arguments


 // -----return statement-----
// function greeting($name, $name2 = "BIM") {    // default parameter
//     return "Hello, $name! and $name2!<br>";
//  }

//  $result = greeting("BIT Students", "BIM Students");  // passing arguments
//  echo $result; 
// 




// // -----function recursion-----
// 1. factorial of a number eg. 5! = 5*4*3*2*1 = 120
// 2. fibonacci series eg. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144
// 3. sum of digits of a number eg. 123 = 1+2+3 = 6

// 1. factorial of a number

/**
 * 5! = 5*4!  = n! = n*(n-1)!
 * 4! = 4*3!
 * 3! = 3*2!
 * 2! = 2*1!
 * 1! = 1*0!
 * 0! = 1
 * 
 */

function factorialOfNum($num) {
    // base case
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        // recursive case
        return $num * factorialOfNum($num - 1);
    }
}

// echo factorialOfNum(5);



// fibonacci series
// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144

/**
 * 1 = 0+1   
 * 2 = 1+1   
 * 3 = 1+2
 * 5 = 2+3
 * 8 = 3+5
 * 13 = 5+8
 * 21 = 8+13
 * 
 * fibonacci(n) = fibonacci(n-1) + fibonacci(n-2)
 */


 function fibonacci($num) {
    // base case
    if ($num == 0) {
        return 0;
    } elseif ($num == 1) {
        return 1;
    } else {
        // recursive case
        return fibonacci($num - 1) + fibonacci($num - 2);
    }
}

for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}



// varidic function or variable length argument function

function sum(...$numbers) { // ... is the spread operator
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sum(1, 2, 3, 4, 5); 



// anonymous function or closure function

$square = function ($number) {
    return $number * $number;
};

echo $square(5);


// ---- callback function----

function greet($callback) {
    echo "Before greeting...<br>";
    $callback(); // calling the callback function
    echo "<br>After greeting.";
}

greet(function() {
    echo "Hello, Tika!";
});



// or you can use a named function as a callback
// function greet($callback) {
//     echo "Before greeting...<br>";
//     $callback(); // calling the callback function
//     echo "<br>After greeting.";
// }

// function sayHello() {
//     echo "Hello, Tika!";
// }

// greet("sayHello");




?>





