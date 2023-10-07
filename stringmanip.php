<?php
$title = 'String Manipulation';
include 'include_require/header.php';

echo "<h1> $title </h1>";


$phrase1 = "The quick brown fox jumped over the lazy dog.";
$phrase2 = "and Jill went up the hill";
$name = "Stephen";
echo "<p> $name $phrase2 and saw  $phrase1</p>";

echo "<hr/>";

echo '<br/>Uppercase first letter: ' . lcfirst($name) . '<br/>';
echo '<br/>Uppercase first letter of each word: ' . ucwords($phrase1) . '<br/>';
echo '<br/>Upper case: ' . strtoupper($name) . '<br/>';
echo '<br/>Lower case: ' . strtolower("HELLO WORLD (WAS UPPER CASE)") . '<br/>';
echo '<hr/>';
echo '<br/>Repeat String: ' . str_repeat('Beetle Juice!. ', 3) . '<br/>';
echo '<br/>Repeat String and change case - Nested Function: ' . strtoupper(str_repeat('Beetle Juice. ', 3)) . '<br/>';
echo '<br/>Substring: ' . substr($name, 4, 5) . '<br/>';

echo '<br/>Get position of string: ' . strpos($name, 'n') . '<br/>';


echo '<br/>Find Character "S": ' . strchr($name, 'S') . '<br/>';
echo '<br/>Find Character "t": ' . strchr($name, 't') . '<br/>';
echo '<br/>Find Character "e": ' . strchr($name, 'e') . '<br/>';
echo '<br/>Find Character "n": ' . strchr($name, 'n') . '<br/>';

echo '<br/>Find Length of String: ' . strlen($name) . '<br/>';

echo '<br/>Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
echo '<br/>Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
echo '<br/>Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
echo '<br/>Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

echo '<br/>Replace string with another: ' . str_replace("jumped", "flew", $phrase1) . '<br/>';

?>

<?php require 'include_require/footer.php'; ?>