<?php

$xml = simplexml_load_file('books.xml') or die("Error: Cannot create object");

// print_r($xml);

// echo ($xml->book[0]->title . "<br>");
// echo ($xml->book[0]->author . "<br>");
// echo ($xml->book[0]->year . "<br>");

// // getting attribute
// echo $xml->book[0]['category'] . "<br>"; 
// echo $xml->book[0]->title['lang']; 



// foreach($xml->book as $book) {
foreach($xml->children() as $book) {
    
    // print_r($book);
    // echo "<br>";

    echo ($book->title . "<br>");

    // // getting attribute
    // echo $books->title['lang']; 
}


?>