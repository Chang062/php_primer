<?php
$title = 'Home';
include 'include_require/header.php' ?>

<h1> Hello HTML</h1>


<?php

echo  "Hello PHP!";
echo  "<br/> <br/> <br/>";
echo  "CODING IS FUN";
?>

<?php

$name = 'Stephen Baker';
$age = 21;

echo $name;
echo '<h1> My name is: ' . $name . '</h1>';
//echo using double quotes and interpolation
echo "<h1> My age is:  $age </h1>";
?>

<?php include 'include_require/footer.php' ?>