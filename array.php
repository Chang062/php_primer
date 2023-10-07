<?php
$title = 'Arrays';
include 'include_require/header.php';
echo "<h1> $title </h1>";


$series = array(86, 90, 101, 105, 1, 4, 66, 9, 100, 1001, 500, 505);

echo $series[10];

echo "<p> I am number: $series[6]</p>";

$lenght = count($series);
echo "<p>The Total amount of numbers in the series is: $lenght</p>";

for ($count = 0; $count < $lenght; $count++) {
    echo "<p>I am number: $series[$count]</p>";
}
?>

<?php require 'include_require/footer.php'; ?>