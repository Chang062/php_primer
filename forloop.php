<?php $title = 'For Loop';
include 'include_require/header.php';

echo "<H1> $title</H1>";
$count = 0;

for ($count = 1; $count <= 15; $count++) {
    echo "<p> The count is: $count</p>";
}



?>
<?php require 'include_require/footer.php'; ?>