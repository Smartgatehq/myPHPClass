<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP NUMBERS</title>
</head>
<body>
    

<h1>CHECKING IF A VARIABLE IS AN INTEGER</h1>
<p>PHP has the following functions to check if the type of a variable is integer: <br><br><br>

is_int() <br>
is_integer() - alias of is_int() <br>
is_long() - alias of is_int()

</p>

    <?php
    // Check if the type of a variable is integer   
    $x = 5985;
    var_dump(is_int($x));
    
    echo "<br>";
    
    // Check again... 
    $x = 59.85;
    var_dump(is_int($x));

    ?> 

<h1>CHECKING FLOATS</h1>

<p>PHP has the following functions to check if the type of a variable is float: <br>

is_float()<br>
is_double() - alias of is_float()
</p>

<?php
$ose = 78.45;
var_dump(is_float($ose));

echo "<br>";

$ose = 7845;
var_dump(is_float($ose));

?>


<h3>PHP Numerical Strings</h3>

<?php
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>
</body>
</html>