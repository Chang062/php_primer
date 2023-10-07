<?php $title = 'If Statements';
include 'include_require/header.php';
echo "<H1> $title </H1>";

$grade = 49;
$lgrade = 'A';
$pass = "CONGRATULATIONS YOU'VE PASSED YOUR EXAM!!!!";
$fail = "UNFORTUNATELY YOU HAVE NOT SUCCESSFULLY COMPLETED THIS EXAM, <br/> 
    PLASE CONSIDER A MORE ROBUST STUDY PLAN AND TRY AGAIN. BEST WISHES!! ";

if ($grade >= 80) {
    echo "<h3 style = 'color: Green'> $pass </h3>";

    if ($grade > 90) {
        $lgrade = 'A++';
        echo "<h2 style = 'color: Blue'> Your letter grade is: $lgrade </h2>";
    } else {
        echo "<h2 style = 'color: Blue'> Your letter grade is: $lgrade </h2>";
    }
} else {
    echo "<h3 style = 'color: Orange'> $fail </h3>";
    if ($grade >= 60 && $grade < 80) {
        $lgrade = 'B';
        echo "<h2 style = 'color: RED'> Your letter grade is: $lgrade </h2>";
    } else if ($grade >= 50 && $grade < 60) {
        $lgrade = 'C';
        echo "<h2 style = 'color: RED'> Your letter grade is: $lgrade </h2>";
    } else {
        $lgrade = 'D';
        echo "<h2 style = 'color: RED'> Your letter grade is: $lgrade </h2>";
    }
}
?>

<?php require 'include_require/footer.php'; ?>