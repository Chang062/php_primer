<?php $title = 'Functions';
include 'include_require/header.php';

echo "<h1> $title </h1>";

function writeMessage()
{
    echo "Learning PHP is fun! <br/>";
}
function message()
{
    echo "Lets do Math! <br/>";
}

writeMessage();

echo "<hr/>";

message();


function addFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    $num2 = $num2 + 1;
    echo "The sum of $num1 and $num2 is: $sum <br/>";
}


function changeNum(&$num)
{
    $num = $num + 10;
    // $num+= 10;
}

function returnProduct($num1, $num2)
{
    $prod = $num1 * $num2;
    return $prod;
}

$num = 500;
addFunction(10, 20);
addFunction(10, $num);
addFunction('10', "50");

changeNum($num);
echo $num . '<br/>';

$return_value = returnProduct(10, 200);
echo $return_value . '<br/>';
?>
<?php require 'include_require/footer.php'; ?>