<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    
<h1>PHP Loops</h1>

<h3>The PHP while Loop</h3>

<p>The while loop executes a block of code as long as the specified condition is true.</p>

<p><em>Example 1</em></p>
<?php
$number = 1;

while($number < 10){
echo "STUDENTS" ."<br>";


$number = $number +1;
}

?>

<p><em>Example 2</em></p>
<p>The example below displays the numbers from 1 to 5:</p>

<?php
$x = 1;

while($x <= 6) {
  echo "The number is: $x <br>";
  $x++;
}
?>


<p><em>Example 3</em></p>

<?php

$mychildren = 1;

while ($mychildren <=12) {
    echo "I have $mychildren children <br>";

    $mychildren+=2;

}

?>








</body>
</html>