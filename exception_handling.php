<?php

// exception
// --> An exception is an object that describes an error or unexpected behaviour of a PHP script.  

// exception handling in PHP
// --> Exception handling is a way to handle errors and exceptions in a controlled manner.
// --> It allows you to catch and handle exceptions, preventing the script from terminating unexpectedly.


// throw statement 
// --> allows a user defined function or method to throw an exception when a specific condition is met, such as an invalid input or a failed operation.
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.", 3); // Throw an exception if the divisor is zero
    }

    return $a / $b;
}

// echo divide(10, 0) . "\n"; // Output: 5


// try-catch block
// --> A try-catch block is used to catch exceptions thrown by a function or method.

try {
    $result = divide(10, 0); // This will throw an exception
    echo "Result: $result\n";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage(). "<br>" . $e->getFile(). "<br>". $e->getCode(). "<br>". $e->getLine(). "\n"; // Output: Caught exception: Division by zero is not allowed.
}
















?>