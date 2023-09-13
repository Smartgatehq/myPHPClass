<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DO WHILE LOOP</title>
</head>
<body>
   
<h1>The PHP do...while Loop</h1>

<p>
    The do...while loop will always execute the block of code once,
    it will then check the condition, and repeat the loop while
    the specified condition is true.
</p>

<p><em>Example 1</em></p>

<?php 
$x = 2;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<p><em>Example 2</em></p>

<?php

$mychildren = 4;

do {
    echo "My number of children is $mychildren <br>";
    $mychildren++;
} while ($mychildren <=10);

?>


</body>
</html>