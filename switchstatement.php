<?php include 'include_require/header.php';

echo "<H2>SWITCH STATEMENT </H2>";
$lgrade = 'F';
$A1 = "Your commitment to excellence is evident in your consistent participation in class, 
            the quality of your assignments, and your strong grasp of the course material. Your work demonstrates
            a depth of understanding that goes beyond the expected requirements.";

$A2 = "I encourage you to continue with the same level of dedication and enthusiasm. Your strong work 
            ethic and intellectual curiosity will undoubtedly serve you well in your academic journey.";

$fail = "It's important to remember that failure is not a reflection of your potential but rather 
    a signal that there are challenges that need to be addressed. We believe in your ability to improve and 
    succeed, and I am here to help you make the necessary changes.";

switch ($lgrade) {
    case 'A++':
        echo "<h2 style='color: CYAN'> $A1 </h2>";
        break;
    case 'A':
        echo "<h2 style='color: green'> $A2</h2>";
        break;
    default:
        echo "<h2 style='color: Magenta'> $fail </h2>";
        break;
}
?>
<?php require 'include_require/footer.php'; ?>