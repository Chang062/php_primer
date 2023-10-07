<?php include 'include_require/header.php';

echo "<H1> WHILE LOOP </H1>";
$grade = 0;
$dgrade = 10;

while ($grade < 10) {
    echo "<p> My Current Grade is: $grade and my desired Grade is: $dgrade </p>";
    $grade++;
}

echo "<p style = 'color: Magenta'> DESIRED GRADE ACHEIVED!!!!!!!!!!!!</p>";
?>


<?php
echo "<H1> DO WHILE LOOP </H1>";
$grade = 0;
do {
    echo "<p>My grade is less than: $dgrade </p>";
    $grade++;
} while ($grade < 10);
echo "<p style = 'color: Green'> MY GRADE IS NOT LESS THAN: $grade</p>";

?>

<?php require 'include_require/footer.php'; ?>