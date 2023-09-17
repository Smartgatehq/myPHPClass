<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for Loop</title>
</head>
<body>

<h1>PHP for Loop</h1>

<p><em>Example 1</em></p>

<p>The example below displays the numbers from 2 to 6</p>
    
<?php

for($number = 2; $number < 7; $number++){
echo $number . "<br>";

}
?>

<p><em>Example 2</em></p>

<p>The example below displays the numbers from 0 to 10:</p>

<?php

for($number = 0; $number <= 10; $number++){
    echo $number . "<br>";
}

?>

<p><em>Example 3</em></p>
<p>This example counts to 100 by tens:</p>


<?php

for($number = 0; $number <=100; $number+=10){
echo $number . "<br>";
}
?>

</body>
</html>