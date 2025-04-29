<?php

$xml = simplexml_load_file('books.xml');
// print_r($xml);

// echo $xml->to . "<br>";
// echo $xml->from . "<br>";
// echo $xml->heading ."<br>";
// echo $xml->body . "<br>";

foreach($xml->book as $book) {
    // print_r($book);

    echo $book->author . "<br>";
    // echo "<br>";
    // echo "<br>";

}


?>