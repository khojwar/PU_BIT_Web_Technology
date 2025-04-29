<?php

// string manipulation functions in PHP

// 1. strlen() - returns the length of a string
$string = "Hello, World!";
$length = strlen($string);
echo "The length of the string is: $length\n"; // Output: The length of the string is: 13

// 2. str_word_count() - counts the number of words in a string
$string = "Hello, World! How are you?";
$word_count = str_word_count($string);
echo "The number of words in the string is: $word_count\n"; // Output: The number of words in the string is: 6


// 3. str_replace() - replaces all occurrences of a substring in a string
$string = "Hello, World!";
$search = "World";
$replace = "PHP";
$new_string = str_replace($search, $replace, $string);
echo "The new string is: $new_string\n"; // Output: The new string is: Hello, PHP!


// 4. strrev() - reverses a string
$string = "Hello, World!";
$reversed_string = strrev($string);
echo "The reversed string is: $reversed_string\n"; // Output: The reversed string is: !dlroW ,olleH


// 5. strtoupper() - converts a string to uppercase
$string = "Hello, World!";
$uppercase_string = strtoupper($string);
echo "The uppercase string is: $uppercase_string\n"; // Output: The uppercase string is: HELLO, WORLD!

// 6. strtolower() - converts a string to lowercase
$string = "Hello, World!";
$lowercase_string = strtolower($string);
echo "The lowercase string is: $lowercase_string\n"; // Output: The lowercase string is: hello, world!

// 7. ucfirst() - capitalizes the first character of a string
$string = "hello, world!";
$capitalized_string = ucfirst($string);
echo "The capitalized string is: $capitalized_string\n"; // Output: The capitalized string is: Hello, world!

// 8. ucwords() - capitalizes the first character of each word in a string
$string = "hello, world! how are you?";
$capitalized_string = ucwords($string);
echo "The capitalized string is: $capitalized_string\n"; // Output: The capitalized string is: Hello, World! How Are You?

// 9. trim() - removes whitespace from the beginning and end of a string
$string = "   Hello, World!   ";
$trimmed_string = trim($string);
echo "The trimmed string is: '$trimmed_string'\n"; // Output: The trimmed string is: 'Hello, World!'

// 10. ltrim() - removes whitespace from the beginning of a string
$string = "   Hello, World!   ";
$ltrimmed_string = ltrim($string);
echo "The left trimmed string is: '$ltrimmed_string'\n"; // Output: The left trimmed string is: 'Hello, World!   '

// 11. rtrim() - removes whitespace from the end of a string
$string = "   Hello, World!   ";
$rtrimmed_string = rtrim($string);
echo "The right trimmed string is: '$rtrimmed_string'\n"; // Output: The right trimmed string is: '   Hello, World!'

// 12. substr() - returns a part of a string
$string = "Hello, World!";
$substring = substr($string, 7, 5); // Start at index 7, length 5
echo "The substring is: $substring\n"; // Output: The substring is: World

// 13. strpos() - finds the position of the first occurrence of a substring in a string
$string = "Hello, World!";
$search = "World";
$position = strpos($string, $search);
echo "The position of '$search' in the string is: $position\n"; // Output: The position of 'World' in the string is: 7

// 14. strrpos() - finds the position of the last occurrence of a substring in a string
$string = "Hello, World! Hello, PHP!";
$search = "Hello";
$position = strrpos($string, $search);
echo "The position of the last occurrence of '$search' in the string is: $position\n"; // Output: The position of the last occurrence of 'Hello' in the string is: 20

// 15. str_split() - splits a string into an array
$string = "Hello, World!";
$array = str_split($string, 5); // Split into chunks of 5 characters
print_r($array); // Output: Array ( [0] => Hello [1] => , Wor [2] => ld! )

// 16. implode() - joins array elements into a string
$array = array("Hello", "World", "PHP");
$string = implode(" ", $array); // Join with a space
echo "The joined string is: $string\n"; // Output: The joined string is: Hello World PHP

// 17. explode() - splits a string by a delimiter into an array
$string = "Hello,World,PHP";
$delimiter = ",";
$array = explode($delimiter, $string);
print_r($array); // Output: Array ( [0] => Hello [1] => World [2] => PHP )

// 18. str_repeat() - repeats a string a specified number of times
$string = "Hello! ";
$repeated_string = str_repeat($string, 3);
echo "The repeated string is: $repeated_string\n"; // Output: The repeated string is: Hello! Hello! Hello!

// 19. str_pad() - pads a string to a certain length with another string
$string = "Hello";
$length = 10;
$pad_string = "*";
$padded_string = str_pad($string, $length, $pad_string, STR_PAD_BOTH);
echo "The padded string is: $padded_string\n"; // Output: The padded string is: ***Hello****

// 20. str_shuffle() - randomly shuffles the characters in a string
$string = "Hello, World!";
$shuffled_string = str_shuffle($string);
echo "The shuffled string is: $shuffled_string\n"; // Output: The shuffled string is: !oHdlr,oeWl (output will vary each time)

// 21. htmlspecialchars() - converts special characters to HTML entities
$string = "<h1>Hello, World!</h1>";
$escaped_string = htmlspecialchars($string);
echo "The escaped string is: $escaped_string\n"; // Output: The escaped string is: &lt;h1&gt;Hello, World!&lt;/h1&gt;

// 22. htmlentities() - converts all applicable characters to HTML entities
$string = "<h1>Hello, World!</h1>";
$escaped_string = htmlentities($string);
echo "The escaped string is: $escaped_string\n"; // Output: The escaped string is: &lt;h1&gt;Hello, World!&lt;/h1&gt;

// 23. htmlspecialchars_decode() - converts HTML entities back to their corresponding characters
$string = "&lt;h1&gt;Hello, World!&lt;/h1&gt;";
$decoded_string = htmlspecialchars_decode($string);
echo "The decoded string is: $decoded_string\n"; // Output: The decoded string is: <h1>Hello, World!</h1>


?>