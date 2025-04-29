<?php

// regular expressions in PHP
// Regular expressions are a powerful tool for pattern matching and string manipulation in PHP.
// They allow you to search, replace, and validate strings based on specific patterns.
// PHP supports two types of regular expressions: POSIX and Perl-compatible (PCRE).
// The PCRE functions are more powerful and flexible, so we will focus on them in this example.
// The PCRE functions are prefixed with "preg_" and include functions like preg_match(), preg_replace(), and preg_split().
// The syntax for regular expressions in PHP is similar to that of other programming languages, but there are some differences.
// In PHP, regular expressions are enclosed in delimiters, which can be any character, but the most common are slashes (/).
// The pattern itself is written between the delimiters, and you can include modifiers after the closing delimiter to change the behavior of the pattern matching.
// The most common modifiers are "i" for case-insensitive matching, "m" for multi-line matching, and "s" for single-line matching.
// In this example, we will demonstrate how to use regular expressions in PHP to validate an email address and a phone number.
// We will also show how to use the preg_replace() function to remove unwanted characters from a string.
// We will also demonstrate how to use the preg_split() function to split a string into an array based on a regular expression pattern.
// Finally, we will show how to use the preg_match_all() function to find all matches of a pattern in a string.
// We will also demonstrate how to use the preg_grep() function to filter an array based on a regular expression pattern.
// We will also show how to use the preg_quote() function to escape special characters in a string for use in a regular expression pattern.
// We will also demonstrate how to use the preg_last_error() function to get the last error code from a regular expression function.
// We will also show how to use the preg_replace_callback() function to perform a callback function on each match of a pattern in a string.
// We will also demonstrate how to use the preg_filter() function to filter an array based on a regular expression pattern and return the matches.




// regular expression function 
// 1. preg_match() - This function is used to perform a regular expression match. It returns 1 if the pattern matches, 0 if it does not, and false if an error occurred.
// 2. preg_match_all() - This function is used to perform a global regular expression match. It returns the number of matches found and populates an array with the matches.
// 3. preg_replace() - This function is used to perform a regular expression search and replace. It replaces all occurrences of the pattern in the subject string with the replacement string.
// 4. preg_split() - This function is used to split a string into an array based on a regular expression pattern. It returns an array of strings.
// 5. preg_grep() - This function is used to filter an array based on a regular expression pattern. It returns an array containing all elements of the input array that match the pattern.


// 1. preg_match()
// returns 1 if the pattern matches, 0 if it does not, and false if an error occurred.

// Validate an Email Address
$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
$email = "tikaram@gmail.com";
// $email = "invalid-email@.com";
$isValidEmail = preg_match($pattern, $email);

if ($isValidEmail) {
    echo "$email is a valid email address.\n";
} else {
    echo "$email is not a valid email address.\n";
}


// 2. preg_match_all()
// Find all matches of a pattern in a string

$pattern = '/\d+/'; // Pattern to match one or more digits
$subject = "There are 3 apples and 5 oranges.";
preg_match_all($pattern, $subject, $matches);
print_r($matches);


// 3. preg_replace()
// Remove unwanted characters from a string

$pattern = '/[^a-zA-Z0-9]/'; // Pattern to match non-alphanumeric characters
$string = "Hello, World! 123";
$replacement = ""; // Replacement string (empty string to remove unwanted characters)
$cleanedString = preg_replace($pattern, $replacement, $string);
echo "Cleaned string: $cleanedString\n"; // Output: HelloWorld123
echo "\n";

// 4. preg_split()
// Split a string into an array based on a regular expression pattern

$pattern = '/[\s,]+/'; // Pattern to match whitespace or commas
$string = "apple, banana orange, grape";
$array = preg_split($pattern, $string);
print_r($array); // Output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )
echo "\n";

// 5. preg_grep()
// Filter an array based on a regular expression pattern

$array = ["apple", "banana", "cherry", "date", "fig", "grape"];
$pattern = '/^a/'; // Pattern to match strings starting with 'a'
$filteredArray = preg_grep($pattern, $array);
print_r($filteredArray); // Output: Array ( [0] => apple [5] => grape )




?>