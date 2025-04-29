<?php

// $xml = simplexml_load_file('note.xml') or die("Error: Cannot create object");

// // print_r($xml);

// echo $xml->to . "<br>";
// echo $xml->from . "<br>";
// echo $xml->heading . "<br>";
// echo $xml->body . "<br>";






// ---------------------------------------
// PHP XML DOM Parser 
// ---------------------------------------

// $xmlDoc = new DomDocument();
// $xmlDoc->load('note.xml');

// $x = $xmlDoc->documentElement;
// foreach($x->childNodes as $item) {
//     echo $item->nodeName . ": " . $item->nodeValue . "<br>";
// }

$obj = new DOMDocument();

$obj->load('note.xml');

$xy = $obj->documentElement;
foreach($xy->childNodes as $item) {
    echo $item->nodeName . ": " . $item->nodeValue. "<br>";
};

?>